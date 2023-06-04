<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Datatable;
use App\Models\Registration;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\RegistrationResource;

class RegistrationController extends Controller
{
    public function getQuery(Request $request)
    {
        return Registration::query();
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

        return view('admin.registration.index');
    }
}
