<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function showhome($userId){
        $latestData= User::where('users.id', $userId)->first();
        return view('home', ["title" => "Home", 'userId' => $userId, 'latestData' => $latestData]);
    }

    public function inbox($userId)
    {
        $latestData= User::where('users.id', $userId)->first();
        return view('inbox', ["title" => "Inbox", 'userId' => $userId, 'latestData' => $latestData]);
    }

}
