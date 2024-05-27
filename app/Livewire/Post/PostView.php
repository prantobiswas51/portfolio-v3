<?php

namespace App\Livewire\Post;

use App\Models\Post;
use Livewire\Component;

class PostView extends Component
{
    public function render()
    {
        return view('livewire.post.post-view', [
            'posts' => Post::all(),
        ]);
    }

    public function delete(Post $post)
    {
        $post->delete();

        return redirect()->route('postsControl.index')->with('status', 'Post Deleted Successfully');
    }
}
