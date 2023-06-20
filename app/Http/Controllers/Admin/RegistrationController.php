<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Actions\Datatable;
use App\Models\Registration;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use App\Models\SupportHasRegistration;
use App\Http\Resources\Admin\RegistrationResource;
use App\Models\Status;
use Carbon\Carbon;

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
                    ->orWhere('email', 'LIKE', $search.'%')
                    ->orWhere('mobile', 'LIKE', $search.'%');
                });
            });
        })->process(function($q, $skip, $take){
            return RegistrationResource::collection(
                $q->orderByDesc('id')->skip($skip)->take($take)->get()
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
        $statuses = Status::auth()->active()->get();
        $status = null;

        if(!blank($request->status)){
            $status = Status::find(Crypt::decrypt($request->status))->name;
        }

        return view('admin.registration.index', compact('users', 'statuses', 'status'));
    }

    public function all(Request $request)
    {
        if($request->ajax()){
            self::$requestType = 'all';
            return $this->datatable($request);
        }

        $users = User::active()->role('support')->get();
        $statuses = Status::auth()->active()->get();

        return view('admin.registration.all', compact('users', 'statuses'));
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
}
