<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show()
    {
        return view('login');
    }
    public function store(Request $request)
    {
        try {
            $email = $request->input('email');
            $password = $request->input('password');

            if (Auth::guard('web')->attempt(['email' => $email, 'password' => $password])) {
                return redirect('/dashboard/user');
            } else if (Auth::guard('admins')->attempt(['email' => $email, 'password' => $password])) {
                return redirect('/dashboard/admin');
            } else {
                return redirect('/register');
            }
        } catch (\Exception $e) {
            return redirect('/login');

        }
    }
}