<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class PostsList extends Component
{
    public $posts;
    public function render()
    {
        $this->posts = Post::OrderBy('created_at', 'desc')->take(5)->get();
        return view('livewire.posts-list');
    }
}
