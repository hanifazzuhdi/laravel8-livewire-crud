<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreatePost extends Component
{
    public $content;

    public function render()
    {
        return view('livewire.create-post');
    }

    public function createPost()
    {
        Post::create([
            'user_id' => Auth::id(),
            'content' => $this->content,
        ]);

        $this->content = "";
        $this->emit('postCreated');
    }
}
