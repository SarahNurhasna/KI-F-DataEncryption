<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EncryptDecryptController extends Controller
{
    public function encrypt()
    {
        return view('encryptdata', [
            "title" => "Encrypted Data"
        ]);
    }

    public function decrypt()
    {
        return view('decryptdata', [
            "title" => "Decrypted Data"
        ]);
    }
}