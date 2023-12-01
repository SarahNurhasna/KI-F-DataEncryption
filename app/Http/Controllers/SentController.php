<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\RequestedData;

class SentController extends Controller
{
    public function showsent($userId)
    {
        $latestData= User::where('users.id', $userId)->first();
        return view('sent', ["title" => "sent", 'userId' => $userId, 'latestData' => $latestData]);
        // return view('sent', [
        //     "title" => "Sent"
        // ]);
    }
    
}
