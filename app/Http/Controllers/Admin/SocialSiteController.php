<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Datatable;
use App\Models\SocialSite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\SocialSiteResource;

class SocialSiteController extends Controller
{
    public function getQuery(Request $request)
    {
        return SocialSite::query();
    }

    public function datatable(Request $request)
    {
        $list = (new Datatable($request))->setQuery(function () use ($request) {
            return $this->getQuery($request);
        })->setFilterQuery(function($q) use ($request) {
            return $q;
        })->process(function($q, $skip, $take){
            return SocialSiteResource::collection(
                $q->orderByDesc('id')
                ->skip($skip)
                ->take($take)
                ->get()
            );
        });

        return $list;
    }

    public function index(Request $request)
    {
        if($request->ajax()){
            return $this->datatable($request);
        }

        return view('admin.social-site.index');
    }

    public function addOrUpdate(Request $request)
    {
        $data = SocialSite::updateOrCreate(
            [
                'id' => $request->id ?? null,
            ],
            [
                'name' => $request->name,
                'icon' => $request->icon,
                'link' => $request->link
            ]
        );

        return $data;
    }

    public function trash(Request $request)
    {
        SocialSite::destroy($request->id);

        return true;
    }

    public function updateStatus(Request $request)
    {
        SocialSite::find($request->id)->update([
            'status' => DB::raw('NOT status')
        ]);

        return true;
    }
}
