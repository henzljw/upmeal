<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class PostsList extends Component
{
    public $posts;
    public function render()
    {
        $this->posts = Post::OrderBy('created_at', 'desc')->get();
        return view('livewire.posts-list');
    }
}
