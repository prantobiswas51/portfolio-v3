<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminPostController extends Controller
{
    public function create(){
        $categories =  Category::get();
        return view('admin.posts.create', compact('categories'));
    }

    public function view(){
       $posts = Post::with('categories')->get();
       return view('admin.posts.view', compact('posts'));
    }

    public function edit(){
        return "Edit post";
    }

    public function deletePost($id){
        $posts = Post::find($id);
        $posts->delete();
        return redirect('/admin/posts/view/')->with('Status',"Post Deleted Successfully");
    }

    public function save(Request $request){

        
        $image = $request->postImage;  // your base64 encoded
        $image = str_replace('data:image/png;base64,', '', $image);
        $image = str_replace(' ', '+', $image);
        $imageName = time().'.'.'png';
        Storage::disk('postimages')->put($imageName, base64_decode($image));

   
        $validated = $request->validate([
            'postTitle' => ['required', 'string', 'max:255'],
            'postDes' => 'required',
            'status' => 'required',
            'categories' => 'required',
        ]);

       $post = Post::create([
            'postTitle'=>$request->postTitle,
            'postDes'=>$request->postDes,
            'postImg'=> $imageName,
            'user_id'=>auth()->user()->id,
            'postStatus'=> $request->status,
        ]);

        $post->categories()->sync($request->categories);
        return back()->with('message','success');
    }
}
