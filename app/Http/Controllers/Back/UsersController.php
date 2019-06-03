<?php

namespace App\Http\Controllers\Back;

use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index()
    {
        $admins = Admin::get();

        return view('back.admins.index', compact('admins'));
    }

    public function create()
    {
        return view('back.admins.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:admins,email',
            'password' => 'required|confirmed'
        ]);

        $admin = new Admin;
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = bcrypt($request->password);
        $admin->save();
        
        

        return redirect()->route('admins.index');
    }

    public function update(Request $request, Admin $admin)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        $admin->name = $request->name;
        $admin->save();

        return redirect()->route('admins.index');
    }

    public function editProfile()
    {
        $user = auth('admin')->user();

        return view('back.admins.profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        $user = auth('admin')->user();
        $user->name = $request->name;
        $user->save();

        return redirect()->route('admin.home');
    }


    
}
