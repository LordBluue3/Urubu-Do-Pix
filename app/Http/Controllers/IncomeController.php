<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IncomeController extends Controller
{
    public function show(){
        return view('dashboard.user.income');
    }
}
