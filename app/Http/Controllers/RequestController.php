<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function request()
    {
        return view('request', [
            "title" => "Request"
        ]);
    }
}