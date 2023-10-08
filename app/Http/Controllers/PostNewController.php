<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostNewController extends Controller
{
    public function show()
    {
        return view('dashboard.admin.post-new');
    }
}
