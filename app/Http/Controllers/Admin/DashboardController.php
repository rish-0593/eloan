<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use Illuminate\Support\Arr;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index() : View {
        $series = [];
        $categories = [];
        $user = auth()->user();
        $now = Carbon::now();

        $filter = function ($q) use ($user) {
            $q->whereRelation('supportHasRegistration', 'user_id', $user->id);
        };

        $today = Registration::query()
                    ->whereDate('created_at', $now)
                    ->when($user->can('support'), $filter)
                    ->count();

        $month = Registration::query()
                    ->whereMonth('created_at', $now)
                    ->when($user->can('support'), $filter)
                    ->count();

        $year = Registration::query()
                    ->whereYear('created_at', $now)
                    ->when($user->can('support'), $filter)
                    ->count();

        if($user->can('admin')){
            $days = $this->getAllDays();

            $data = Registration::query()
                    ->where('created_at', '>=', $now->subDays(7))
                    ->groupBy('day')
                    ->get([
                        DB::raw('DAYNAME(created_at) as day'),
                        DB::raw('ifnull(COUNT(*), 0) as registrationTotal')
                    ])
                    ->pluck('registrationTotal', 'day');

            $resp = collect($days)->merge($data)->toArray();

            $series = Arr::flatten($resp);
            $categories = array_keys($resp);
        }

        return view('admin.dashboard.index', compact('series', 'categories', 'today', 'month', 'year'));
    }

    public function getAllDays(){
        $days = [];

        for ($i = 0; $i < 7; $i++) {
            $days[Carbon::now()->subDays($i)->format('l')] = 0;
        }

        return array_reverse($days);
    }
}
