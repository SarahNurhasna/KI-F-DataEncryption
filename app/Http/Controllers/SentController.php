<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SentController extends Controller
{
    public function sent()
    {
        return view('sent', [
            "title" => "Sent"
        ]);
    }
}
