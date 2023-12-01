<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\RequestedData;

class RequestController extends Controller
{

    public function request(Request $request)
    {
        try{
            // $user = User::where('id', $userId)->first();
            $data = new RequestedData();
            $data-> email_sender = $request->email_sender;
            $data-> email_receiver = $request->email_receiver;
            $data->status = "Mengajukan request";
            // $data->user_id = $userId;
            $data->save();
            
            return redirect()->route('showrequest');
        }
        catch (\Illuminate\Validation\ValidationException $e){
            dd($e->getMessage());
        }
    }

    // public function request($userEmail, $requestedEmail)
    // {
    //     $user = user::where('email', $userEmail)->first();
    //         $req = user::where('email', $requestedEmail)->first();
    //         // dd($user->email);

    //         $data = new requesting();
    //         $data->senderEmail = $user->email;
    //         $data->receiverEmail = $req->email;
    //         $data->status = "Mengajukan request";
    //         $data->information_id = $informationId;
    //         $data->user_id = $userId;
    //         $data->save();

    //         $reqId = $data->id;
    // }

    public function showrequest($userId)
    {
        $latestData= User::where('users.id', $userId)->first();
        return view('request', ["title" => "request", 'userId' => $userId, 'latestData' => $latestData]);
        // return view('request', [
        //     "title" => "Request"
        // ]);
    }

    public function datarequested($userId)
    {
        $latestData= User::where('users.id', $userId)->first();
        return view('datarequested', ["title" => "Data Requested", 'userId' => $userId, 'latestData' => $latestData]);
        // return view('datarequested', [
        //     "title" => "Data Requested"
        // ]);
    }
}
