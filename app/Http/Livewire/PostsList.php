<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Models\User;

class PostsList extends Component
{
    public $posts, $users;
    public function render()
    {
        $this->posts = Post::OrderBy('created_at', 'desc')->get();
        $this->users = User::all();
        return view('livewire.posts-list');
    }
}
