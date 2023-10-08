<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListUserController extends Controller
{
    public function show()
    {
        $users = User::all();
        $admin = Auth::user();
        
        return view('dashboard.admin.list-user', compact('users', 'admin'));
    }
}