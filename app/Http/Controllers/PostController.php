<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PostController extends Controller
{
    public function show()
    {
        $posts = Post::all();
        return view('dashboard.admin.list-posts', compact('posts'));
    }
    public function showEdit($id)
    {
        $post = Post::find($id);
        return view('dashboard.admin.edit-post', compact('post'));
    }
    public function store(Request $request, Post $post)
    {
        $title = $request->input('title');
        $description = $request->input('description');

        $dateNow = Carbon::now();

        $post->title = $title;
        $post->text = $description;
        $post->date = $dateNow->format('d/m/Y');

        $post->save();
        return redirect()->back();

    }
    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->back();
    }
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $dateNow = Carbon::now();

        $title = $request->input('title');
        $text = $request->input('description');
       
        $post->title = $title;
        $post->text =  $text ;
        $post->date = $dateNow->format('d/m/Y');
        $post->save();

        return redirect('/dashboard/admin/post');
    }

}