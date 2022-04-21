<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Models\Cuisine;

class Search extends Component
{
    public $searchTerm = '';
    public $results;
    public $posts;
    public $cuisines;

    public function render()
    {
        if (empty($this->searchTerm)) {
            $this->results = Post::where('title', $this->searchTerm)->get();
        } else {
            $this->results = Post::where('title', 'like', '%' . $this->searchTerm . '%')->get();
        }

        $this->posts = Post::OrderBy('created_at', 'desc')->take(5)->get();

        // Display all meal types in the search.blade.php
        $this->cuisines = Cuisine::all();

        return view('livewire.search');
    }
}
