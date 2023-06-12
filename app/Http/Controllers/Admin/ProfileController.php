<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        return view('admin.profile.index');
    }

    public function update(Request $request)
    {
        $name = $request->name;
        $password = $request->password;

        $user = User::find(Auth::user()->id);
        $data = [];

        if(!blank($password)){
            $action = 'password';
            $data['password'] = Hash::make($password);
        }
        else{
            $action = 'profile';
            $data['name'] = $name;
        }

        $user->update($data);

        return response([
            'action' => $action,
            'data' => $user
        ]);
    }
}
