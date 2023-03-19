<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //show lists of users
    function index()
    {
        $users = User::get(); //select * from user database
        return view(
            'users.index',
            compact('users')
    );
    }
}
