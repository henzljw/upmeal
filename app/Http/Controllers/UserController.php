<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // SHOW USER LIST
    function show()
    {
        $users = User::all();
        return view('user.user-list', ['users' => $users]);
    }
}
