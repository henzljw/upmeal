<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = auth()->user()->posts();
        return view('profile.view', compact('posts'));
    }

    public function add()
    {
        return view('post.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
        ]);
        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->user_id = auth()->user()->id;
        $post->save();

        return redirect('/posts');
    }

    public function edit(Post $post)
    {
        if (auth()->user()->id == $post->user_id) {
            return view('post.edit', compact('post'));
        } else {
            return redirect('/posts');
        }
    }

    public function update(Request $request, Post $post)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
        ]);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();

        return redirect('/posts');
    }

    public function delete($id)
    {
        Post::find($id)->delete();
        return back();
    }
}
