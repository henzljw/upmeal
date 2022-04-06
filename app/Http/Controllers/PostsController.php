<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\Cuisine;
use App\Models\Wishlist;
use App\Http\Requests\PostFormRequest;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = auth()->user()->posts();
        return view('home', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cuisine = Cuisine::all();
        return view('post.add', compact('cuisine'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostFormRequest $request)
    {
        // Image upload
        $path = $request->file('image')->store('public/img/posts');

        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->cuisine_id = $request->cuisine_id;
        $post->ingredients = $request->ingredients;
        $post->steps = $request->steps;
        $post->ct_hrs = $request->ct_hrs;
        $post->ct_min = $request->ct_min;
        $post->image = $path;
        $post->slug = Str::slug($post->title);

        // If found duplicate title
        $duplicate = Post::where('slug', $post->slug)->first();
        if ($duplicate) {
            return redirect('/posts')->with('Title is already exists');
        }

        $post->user_id = auth()->user()->id;
        $post->save();

        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();
        if (!$post) {
            return redirect('/')->withErrors('Requested page not found');
        } else {
            // 
            if(Auth::user()) {
                $postUser = Auth::user();
                $postWishlist = Wishlist::where('post_id', $post->id)
                                    ->where('user_id', $postUser->id)        
                                    ->first();
                
                $data = array(
                    'title' => $post->title,
                    'post' => $post,
                    'postWishlist' => $postWishlist,
                );
            }
            else {
                $data = array(
                    'title' => $post->title,
                    'post' => $post,
                );
            }

            return view('post.show', $data);
        }

        return view('post.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $cuisine = Cuisine::all();
        if (auth()->user()->id == $post->user_id) {
            return view('post.edit', compact('post', 'cuisine'));
        } else {
            return view('profile');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'cuisine_id' => 'required|integer',
            'ingredients' => 'required',
            'steps' => 'required',
            'ct_hrs' => 'required',
            'ct_min' => 'required',
            'image' => 'image|mimes:png,jpg,jpeg|max:2048',
        ]);
        
        $post->title = $request->title;
        $post->description = $request->description;
        $post->cuisine_id = $request->cuisine_id;
        $post->ingredients = $request->ingredients;
        $post->steps = $request->steps;
        $post->ct_hrs = $request->ct_hrs;
        $post->ct_min = $request->ct_min;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/img/posts');
            $post->image = $path;
        }

        $post->save();

        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Post::find($id)->delete();
        return back();
    }
}
