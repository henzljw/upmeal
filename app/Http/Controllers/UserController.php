<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function show()
    {
        $list = User::all();
        return view('admin-dashboard', ['users' => $list]);
    }
    // public function userLists()
    // {
    //     $userLists = User::all();
    //     return view('admin-dashboard', compact('userLists'));
    // }
}
