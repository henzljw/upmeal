<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuisine;
use App\Models\Post;

class RecipeLibraryController extends Controller
{
    public function index()
    {
        $cuisines = Cuisine::all();
        return view('recipe-library.recipe-library', compact('cuisines'));
    }

    public function show($cuisine_slug)
    {
        $cuisines = Cuisine::where('slug', $cuisine_slug)->first();
        if ($cuisines) {
            $posts = Post::where('cuisine_id', $cuisines->id)->get();
            return view('recipe-library.show', compact('posts', 'cuisines'));
        } else {
            return redirect('/');
        }
    }
}
