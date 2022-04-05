<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $postUser = $request->user();
        $postWishlist = Wishlist::where('user_id', $postUser->id)->paginate(10);
        $data = array('title' => 'Wishlist', 'postWishlist' => $postWishlist);
        return view('wishlist.index', $data)->with('no', ($request->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'post_id' => 'required',
        ]);

        $postUser = $request->user();

        $validateWishlist = Wishlist::where('post_id', $request->post_id)->where('user_id', $postUser->id)->first();

        if ($validateWishlist) {
            $validateWishlist->delete();
            return back()->with('success', 'Wishlist successfully deleted.');
        } else {
            $input = $request->all;
            $input['user_id'] = $postUser->id;
            $postWishlist = Wishlist::create($input);
            return back()->with('success', 'Product successfully added to wishlist.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $postWishlist = Wishlist::findOrFail($id);

        if ($postWishlist->delete()) {
            return back()->with('success', 'Wishlist successfully deleted.');
        } else {
            return back()->with('error', 'Wishlist failed to delete.');
        }
    }
}
