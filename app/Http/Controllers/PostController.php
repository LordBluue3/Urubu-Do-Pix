<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show()
    {
        $posts = Post::all();
        return view('dashboard.admin.list-posts', compact('posts'));
    }
    public function edit(Post $post)
    {
        return view('dashboard.admin.edit-post', compact('post'));
    }
    public function store(Request $request, Post $post)
    {
        $post->create([ 
            'title' => $request->title,
            'text' => $request->description,
            'date' => now()->format('d/m/Y')
        ]);
        return back();

    }
    public function delete(Post $post)
    {
        $post->delete();
        return redirect()->back();
    }
    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        $title = $request->input('title');
        $text = $request->input('description');
       
        $post->title = $title;
        $post->text =  $text ;
        $post->date = now()->format('d/m/Y');
        $post->save();

        return redirect()->route('admin.new.post.show');
    }

}