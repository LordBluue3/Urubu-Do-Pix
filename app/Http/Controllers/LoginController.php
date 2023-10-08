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

            if(Auth::attempt(['email'=> $email, 'password'=> $password])){
                return redirect('/');
            }else{
                return redirect('/register');
            }
        } catch (\Exception $e) {
            return redirect('/login');

        }
    }
}