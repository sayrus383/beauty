<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        $variable = get_variable('about');

        return view('about', compact('variable'));
    }

    public function founder()
    {
        $variable = get_variable('founder');
        $posts = Post::with('attachment')
            ->orderBy('published_at')
            ->get();

        return view('founder', compact('variable', 'posts'));
    }

    public function post(Post $post)
    {
        return view('post', compact('post'));
    }
}
