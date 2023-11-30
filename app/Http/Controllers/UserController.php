<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home()
    {
        return view('home', [
            "name" => "Sarah",
            "title" => "Home"
        ]);
    }

    public function inbox()
    {
        return view('inbox', [
            "title" => "Inbox"
        ]);
    }
}
