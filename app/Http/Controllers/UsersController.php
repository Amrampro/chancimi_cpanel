<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    function dashboard()
    {
        return view('users/dashboard');
        // return view('maintenance');
    }

    function account()
    {
        return view('users/account');
    }

    function maintenance()
    {
        return view('users/maintenance');
    }
}
