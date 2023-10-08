<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListUserController extends Controller
{
    public function show()
    {
        return view('dashboard.admin.list-user');
    }
}