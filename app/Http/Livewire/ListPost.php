<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class ListPost extends Component
{
    public $postStateId = 0;
    public $content = 0;

    protected $listeners = [
        'postCreated' => '$refresh',
    ];

    public function render()
    {
        return view('livewire.list-post', [
            'posts' => Post::latest()->get()
        ]);
    }

    public function showUpdateForm($id)
    {
        $post = Post::find($id);
        $this->content = $post->content;
        $this->postStateId = $id;
    }

    public function updateContent($id)
    {
        $post = Post::find($id);
        $post->content = $this->content;
        $post->save();

        $this->postStateId = 0;
    }
    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();
    }
}
