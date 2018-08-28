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

    public function consultancies()
    {
        return view('consultancies');
    }

    public function blog()
    {
        $posts = Post::orderBy('counter')->get();
        return view('blog', compact('posts'));
    }

    public function article($id)
    {
        $post = Post::find($id);
        $post->counter++;
        $post->update();

        return view('article', compact('post'));
    }

    public function contactForm()
    {
        $name = trim(strip_tags(Request::get('name')));
        $email = trim(strip_tags(Request::get('email')));
        $page = trim(strip_tags(Request::get('page')));

        mail('astudio0711@gmail.com', "Письмо с '$page'",
            "Вам написал: $name<br />Его email: $email","Content-type:text/html;charset=UTF-8");

        mail('astudio@web-site.kiev.ua', "Письмо с '$page'",
            "Вам написал: $name<br />Его email: $email","Content-type:text/html;charset=UTF-8");
    }
}