<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    public function create(){
        $categories =  Category::get();
        return view('admin.posts.create',compact('categories'));
    }

    public function view(){

        return Post::with('categories')->get();
        return view('admin.posts.view');
    }

    public function edit(){
        return "Edit post";
    }

    public function delete(){
        return "Delete post";
    }

    public function save(Request $request){
   
        $validated =$request->validate([
            'postTitle' => ['required', 'string', 'max:255'],
        
            'postDes' => 'required',
            'categories' => 'required',
        ]);

       $post = Post::create([
            'postTitle'=>$request->postTitle,
            'postDes'=>$request->postDes,
            'user_id'=>auth()->user()->id,
            'postStatus'=>'bllla',
        ]);
        $post->categories()->sync($request->categories);
        return back()->with('message','success');
    }
}
