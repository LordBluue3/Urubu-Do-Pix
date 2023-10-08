<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IncomeController extends Controller
{
    public function show(){
        $user = Auth::user();
        $fakeMoney = $user->fake_money;
        return view('dashboard.user.income', compact('fakeMoney'));
    }
}
