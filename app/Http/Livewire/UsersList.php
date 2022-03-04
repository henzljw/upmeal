<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class UsersList extends Component
{
    public function render()
    {
        $users = User::all();
        return view('livewire.users-list', ['users' => $users]);
    }
}
