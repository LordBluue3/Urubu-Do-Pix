<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function show()
    {

        $user = Auth::user();

        $name = $user->name;
        $phone = $user->phone;
        $email = $user->email;

        return view('dashboard.user.information', compact('name', 'phone', 'email'));


    }
}