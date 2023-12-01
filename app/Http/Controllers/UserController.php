<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showhome($userId){
        $latestInfo = User::where('id', $userId)->first();
        return view('home', ["title" => "Home", 'userId' => $userId, 'latestInfo' => $latestInfo]);
    }

    public function inbox()
    {
        return view('inbox', [
            "title" => "Inbox"
        ]);
    }

}
