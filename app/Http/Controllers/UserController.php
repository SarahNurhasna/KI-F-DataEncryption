<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use phpseclib\Crypt\RSA;
use Illuminate\Support\Str;
use phpseclib\Crypt\AES;

class UserController extends Controller
{
    public function showhome($userId){
        $latestData= User::where('users.id', $userId)->first();
        return view('home', ["title" => "Home", 'userId' => $userId, 'latestData' => $latestData]);
    }

    public function inbox()
    {
        return view('inbox', [
            "title" => "Inbox"
        ]);
    }

    public function showdecrypt($userId, $id){
        $latestData = User::where('id', $id)->first();
        $userId = $latestData->user_id;
        $symkey = $latestData->symkey;
        $aes = new AES('cbc');
        // $aes->setKey($symkey);
        $latestData->NIK = $aes->decrypt(base64_decode($latestData->name));
        $latestData->dob = $aes->decrypt(base64_decode($latestData->email));
        $latestData->gender = $aes->decrypt(base64_decode($latestData->phone));
        $latestData->email = $aes->decrypt(base64_decode($latestData->dateofbirth));
        $latestData->phone = $aes->decrypt(base64_decode($latestData->gender));
        $latestData->address = $aes->decrypt(base64_decode($latestData->address));

        if($latestData){
            return view('vieu', ['id' => $id, 'latestData' => $latestData, 'userId' => $userId]);
        }
    }
}
