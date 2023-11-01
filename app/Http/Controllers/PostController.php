<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('categories')->get();
        return view('posts', compact('posts'));
    }

    public function viewPost($id)
    {
        $singlePost = Post::find($id);
        return view('postView', compact('singlePost'));
    }
}
