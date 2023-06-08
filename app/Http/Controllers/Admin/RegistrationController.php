<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Actions\Datatable;
use App\Models\Registration;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\SupportHasRegistration;
use App\Http\Resources\Admin\RegistrationResource;

class RegistrationController extends Controller
{
    public function getQuery(Request $request)
    {
        $user = Auth::user();

        return Registration::query()
            ->when($user->can('admin'), function($q){
                $q->doesntHave('supportHasRegistration');
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

        return view('admin.registration.index', compact('users'));
    }

    public function assignToUser(Request $request)
    {
        $user_id = $request->user_id;
        $ids = $request->ids;

        foreach ($ids as $id) {
            SupportHasRegistration::create([
                'user_id' => $user_id,
                'registration_id' => $id,
            ]);
        }

        return 1;
    }
}
