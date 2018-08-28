<?php

namespace App\Http\Controllers;

use Request;

use App\Post;

class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function blog()
    {
        $posts = Post::orderBy('created_at')->get();
        return view('blog', compact('posts'));
    }

    public function article($id)
    {
        $post = Post::find($id);
        $post->update();

        return view('article', compact('post'));
    }
}