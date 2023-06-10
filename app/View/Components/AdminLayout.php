<?php

namespace App\View\Components;

use App\Models\Status;
use Illuminate\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;

class AdminLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        $usersStatus = Status::where('user_id', Auth::user()->id)->get();

        return view('layouts.admin', compact('usersStatus'));
    }
}
