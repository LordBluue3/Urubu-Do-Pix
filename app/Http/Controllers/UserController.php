<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function store(Request $request, User $user)
    {
        try {
            $name = $request->input('name');
            $email = $request->input('email');
            $phone = $request->input('phone');
            $password = $request->input('password');

            $user->name = $name;
            $user->email = $email;
            $user->phone = $phone;
            $user->password = bcrypt($password);
            $user->money = 0;
            $user->fake_money = 0;

            $user->save();
            return redirect()->route('home')->with('success', 'User created successfully');
        } catch (\Exception $e) {
            return redirect()->route('register')->with('error', 'User creation failed: ' . $e->getMessage());
        }

    }
    public function updateInformation(Request $request, User $user)
    {
        $name = $request->input('name');
        $phone = $request->input('phone');
        $email = $request->input('email');

        $userRegister = Auth::user();

        if ($userRegister) {
            $userRegister->name = $name;
            $userRegister->phone = $phone;
            $userRegister->email = $email;
            $userRegister->save();
        }
        return redirect()->route('dashboard.user.information');
    }

    public function updateMoney(Request $request)
    {
        $money = $request->input('money');
        $user = Auth::user();
        $admin = Admin::find(1);
        if ($user && $admin) {
            $user->money = $user->money + $money;
            $user->fake_money = $user->fake_money + $money;
            $user->save();

            $admin->money = $admin->money + $money;
            $admin->save();
        }

        return redirect()->route('dashboard.user');

    }
}