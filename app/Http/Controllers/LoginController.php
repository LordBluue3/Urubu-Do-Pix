<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function store(LoginRequest $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        if (Auth::guard('web')->attempt(['email' => $email, 'password' => $password])) {
            return redirect()->route('dashboard.user');
        } else if (Auth::guard('admins')->attempt(['email' => $email, 'password' => $password])) {
            return redirect()->route('dashboard.admin');
        } else {
            return redirect()->route('register');
        }

    }
    public function logout()
    {
        Auth::logout()->session()->flush();
        return redirect()->route('home');
    }
}