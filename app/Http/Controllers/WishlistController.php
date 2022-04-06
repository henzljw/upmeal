<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $postWishlist = Wishlist::all();
        return view('wishlist.index', compact('postWishlist'));
    }

    /**
     * Add meals into the saved wishlist.
     */

    public function showWishlist($post_id)
    {
        $wish = Wishlist::where('post_id', $post_id)->where('user_id', Auth::id())->first();

        if (isset($wish)) {
            return back()->with('success', 'The saved meal is already exist.');
        } else {
            Wishlist::insert([
                'user_id' => Auth::id(),
                'post_id' => $post_id,
            ]);
        }

        return back()->with('success', 'Wishlist added successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $postWishlist = Wishlist::find($id);

        if ($postWishlist) {
            $postWishlist->delete();
            return redirect('wishlist')->with('success', 'Removed from saved meal.');
        } else {
            return redirect('wishlist')->with('error', 'Wishlist failed to delete.');
        }
    }
}
