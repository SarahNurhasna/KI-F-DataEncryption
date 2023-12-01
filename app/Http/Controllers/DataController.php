<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
// use phpseclib\Crypt\RSA;
// use Illuminate\Support\Str;
use phpseclib\Crypt\AES;

class DataController extends Controller
{
    public function encrypt($userId)
    {
        $data = User::where('id', $userId)->get();
        // return view('encryptdata', compact('latest_data'), ["title" => "Encrypted Data"]);
        // return view('encryptdata', ["title" => "Encrypted Data"]);
        if($data){
            return view('encryptdata', [
                "title" => "Encrypted Data",
                'data' => $data, 
                'userId' => $userId
            ]);
        }
    }
    
    // public function decrypt()
    // {
    //     return view('decryptdata', ["title" => "Decrypted Data"]);
    // }

    public function decrypt($userId){
        $latestData = User::where('id', $userId)->first();
        $userId = $latestData->user_id;
        $symkey = $latestData->symkey;
        $aes = new AES();
        // $aes->setKey($symkey);
        $latestData->name = $aes->decrypt(base64_decode($latestData->name));
        $latestData->email = $latestData->email;
        $latestData->phone = $aes->decrypt(base64_decode($latestData->phone));
        $latestData->dateofbirth = $aes->decrypt(base64_decode($latestData->dateofbirth));
        $latestData->gender = $aes->decrypt(base64_decode($latestData->gender));
        $latestData->address = $aes->decrypt(base64_decode($latestData->address));

        if($latestData){
            return view('decryptdata', [
                "title" => "Decrypted Data", 
                'latestData' => $latestData, 
                'userId' => $userId
            ]);
        }
    }
}
