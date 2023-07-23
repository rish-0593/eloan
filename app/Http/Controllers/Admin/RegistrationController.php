<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Status;
use App\Models\Product;
use App\Actions\Datatable;
use App\Models\Registration;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use App\Models\SupportHasRegistration;
use App\Http\Resources\Admin\RegistrationResource;
use App\Models\City;

class RegistrationController extends Controller
{
    protected static $requestType;

    public function getQuery(Request $request)
    {
        $user = Auth::user();

        return Registration::query()
            ->with('supportHasRegistration.user')
            ->when(self::$requestType == 'all', function($q) use ($request) {
                $q->when(!blank($assign_to = $request->assign_to), function($q) use($assign_to) {
                    $q->whereRelation('supportHasRegistration', 'user_id', $assign_to);
                })
                ->when(!blank($registration_status = $request->registration_status), function($q) use($registration_status){
                    if($registration_status == 'completed'){
                        $q->has('loanDetails');
                    }
                    else{
                        $q->doesntHave('loanDetails');
                    }
                });
            }, function($q) use ($user, $request) {
                $q->when($user->can('admin'), function($q){
                    $q->doesntHave('supportHasRegistration');
                }, function($q) use ($user, $request) {
                    $q->whereHas('supportHasRegistration', function($q) use ($user, $request) {
                        $q->where('user_id', $user->id)
                        ->when(!blank($status = $request->status), function($q) use ($status) {
                            $q->where('status_id', Crypt::decrypt($status));
                        }, function($q) {
                            $q->whereNull('status_id');
                        });
                    });
                });
            })
            ->with('product');
    }

    public function datatable(Request $request)
    {
        $list = (new Datatable($request))->setQuery(function () use ($request) {
            return $this->getQuery($request);
        })->setFilterQuery(function($q) use ($request) {
            return $q->when(!blank($search = $request->search), function($q) use ($search) {
                $q->where(function($q) use ($search) {
                    $q->where('name', 'LIKE', $search.'%')
                    ->orWhere('mobile', 'LIKE', $search.'%');
                });
            })
            ->when(!blank($city = $request->city), function($q) use ($city) {
                $q->where('city', $city);
            })
            ->when(!blank($product = $request->product), function($q) use ($product) {
                $q->where('product_id', $product);
            })
            ->when(!blank($loan_amount = $request->loan_amount), function($q) use ($loan_amount) {
                $amount = explode('-', $loan_amount);
                $q->where(function($q) use ($amount) {
                    // dd($amount[0], $amount[1]);
                    $q->where('amount', '>=', (int)$amount[0])
                    ->where('amount', '<=', (int)$amount[1]);
                });
            })
            ->when(!blank($date = $request->date), function($q) use ($date) {
                $q->whereDate('updated_at', Carbon::parse($date)->format('Y-m-d'));
            })
            ->when(!blank($trashed = $request->trashed) && $trashed == 'true', function($q) {
                $q->onlyTrashed();
            });
        })->process(function($q, $skip, $take){
            return RegistrationResource::collection(
                $q->orderByDesc('updated_at')->skip($skip)->take($take)->get()
            );
        });

        return $list;
    }

    public function index(Request $request)
    {
        if($request->ajax()){
            return $this->datatable($request);
        }

        $users = User::active()->role('support')->get();
        $products = Product::get();
        $statuses = Status::auth()->active()->get();
        $cities = City::active()->get();
        $status = null;

        if(!blank($request->status)){
            $status = Status::find(Crypt::decrypt($request->status))->name;
        }

        return view('admin.registration.index', compact('users', 'products', 'statuses', 'cities', 'status'));
    }

    public function all(Request $request)
    {
        if($request->ajax()){
            self::$requestType = 'all';
            return $this->datatable($request);
        }

        $users = User::active()->role('support')->get();
        $statuses = Status::auth()->active()->get();
        $cities = City::active()->get();

        return view('admin.registration.all', compact('users', 'statuses', 'cities'));
    }

    public function assignToUser(Request $request)
    {
        $user_id = $request->user_id;
        $ids = $request->ids;

        if($user_id == 0){
            SupportHasRegistration::whereIn('registration_id', $ids)->delete();
        }
        else{
            foreach ($ids as $id) {
                SupportHasRegistration::updateOrCreate(
                    [
                        'registration_id' => $id,
                    ],
                    [
                        'user_id' => $user_id,
                    ]
                );
            }
        }

        return true;
    }

    public function view(Request $request, $id)
    {
        $view = Registration::query()
                ->with([
                    'product',
                    'loanDetails' => function($q){
                        $q->with('gender', 'employmentStatus', 'maritalStatus', 'residentialType');
                    }
                ])
                ->find(Crypt::decrypt($id));

        // return $view;

        return view('admin.registration.view', compact('view'));
    }

    public function assignStatus(Request $request)
    {
        $registration_id = $request->_registration;
        $status_id = $request->_status;

        SupportHasRegistration::updateOrCreate(
            [
                'registration_id' => $registration_id,
            ],
            [
                'status_id' => $status_id,
                'status_updated_at' => Carbon::now(),
            ]
        );

        return true;
    }

    public function trash(Request $request)
    {
        Registration::destroy($request->id);

        return true;
    }
}
