<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
// use phpseclib\Crypt\RSA;
// use Illuminate\Support\Str;
use phpseclib\Crypt\AES;

class DataController extends Controller
{
    public function encrypt($userId, $id)
    {
        $latestData = User::where('id', $id)->first();;
        return view('encryptdata', compact('latest_data'), ["title" => "Encrypted Data"]);
        // return view('encryptdata', ["title" => "Encrypted Data"]);
        if($latestData){
            return view('encryptdata', [
                "title" => "Encrypted Data", 
                'id' => $id, 
                'latestData' => $latestData, 
                'userId' => $userId
            ]);
        }
    }

    // public function decrypt()
    // {
    //     return view('decryptdata', ["title" => "Decrypted Data"]);
    // }

    public function decrypt($userId, $id){
        $latestData = User::where('id', $id)->first();
        $userId = $latestData->user_id;
        $symkey = $latestData->symkey;
        $aes = new AES('cbc');
        // $aes->setKey($symkey);
        $latestData->name = $aes->decrypt(base64_decode($latestData->name));
        $latestData->email = $aes->decrypt(base64_decode($latestData->email));
        $latestData->phone = $aes->decrypt(base64_decode($latestData->phone));
        $latestData->dateofbirth = $aes->decrypt(base64_decode($latestData->dateofbirth));
        $latestData->gender = $aes->decrypt(base64_decode($latestData->gender));
        $latestData->address = $aes->decrypt(base64_decode($latestData->address));

        if($latestData){
            return view('decryptdata', [
                "title" => "Decrypted Data", 
                'id' => $id, 
                'latestData' => $latestData, 
                'userId' => $userId
            ]);
        }
    }
}
