<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show(){
        $posts = Post::all();
        return view('home', compact('posts'));
    }
}
