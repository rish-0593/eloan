<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Actions\Datatable;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use App\Http\Resources\Admin\TeamResource;

class TeamController extends Controller
{
    protected static $role;

    public function getQuery(Request $request)
    {
        return User::query()->role(self::$role);
    }

    public function datatable(Request $request)
    {
        $list = (new Datatable($request))->setQuery(function () use ($request) {
            return $this->getQuery($request);
        })->setFilterQuery(function($q) use ($request) {
            return $q;
        })->process(function($q, $skip, $take){
            return TeamResource::collection(
                $q->orderByDesc('id')
                ->skip($skip)
                ->take($take)
                ->get()
            );
        });

        return $list;
    }

    public function index(Request $request, $role)
    {
        if($request->ajax()){
            self::$role = $role;
            return $this->datatable($request);
        }

        return view('admin.team.index', compact('role'));
    }

    public function addOrUpdate(Request $request, $role)
    {
        $data = [
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'email' => $request->email,
            'plain_password' => $request->password
        ];

        $user = User::updateOrCreate(
            ['id' => $request->id ?? null], $data
        )->assignRole(Str::ucfirst($role));

        return true;
    }

    public function updateStatus(Request $request)
    {
        User::find($request->id)->update([
            'status' => DB::raw('NOT status')
        ]);

        return true;
    }

    public function updatePassword(Request $request)
    {
        $data = [
            'password' => Hash::make($request->password),
            'plain_password' => $request->password,
        ];

        User::find($request->id)->update($data);

        return true;
    }

    public function loginByUser(Request $request)
    {
        if(auth()->user()->can('admin')){
            $id = $request->id;

            Auth::user()->impersonate(User::find($id));

            return redirect(RouteServiceProvider::HOME);
        }

        abort(403);
    }
}
