<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    public function create(){
        return view('admin.posts.create');
    }

    public function view(){
        return view('admin.posts.view');
    }

    public function edit(){
        return "Edit post";
    }

    public function delete(){
        return "Delete post";
    }

    public function savePost(){
        
    }
}
