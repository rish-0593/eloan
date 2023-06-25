<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\User;
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
        $today = 0;
        $month = 0;
        $year = 0;
        $team = null;
        $user = auth()->user();
        $now = Carbon::now();

        if($user->can('admin')){
            $today = Registration::query()
                        ->whereDate('created_at', $now)
                        ->count();

            $month = Registration::query()
                        ->whereMonth('created_at', $now)
                        ->count();

            $year = Registration::query()
                        ->whereYear('created_at', $now)
                        ->count();

            $days = $this->getAllDays();

            $data = Registration::query()
                    ->whereDate('created_at', '>', now()->subDays(7))
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

        if($user->can('support')){
            $team = User::query()
                    ->where('id', $user->id)
                    ->withCount(['pendingSupport', 'completedSupport', 'support',])
                    ->first();
        }

        return view('admin.dashboard.index', compact('series', 'categories', 'today', 'month', 'year', 'team'));
    }

    public function getAllDays(){
        $days = [];

        for ($i = 0; $i < 7; $i++) {
            $days[Carbon::now()->subDays($i)->format('l')] = 0;
        }

        return array_reverse($days);
    }
}
