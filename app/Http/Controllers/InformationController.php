<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function show()
    {
        return view('dashboard.user.information');
    }
}