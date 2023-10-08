<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function show()
    {
        return view('register');
    }
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
            return redirect('/home')->with('success', 'User created successfully');
        } catch (\Exception $e) {
            return redirect('/register')->with('error', 'User creation failed: ' . $e->getMessage());
        }

    }
}