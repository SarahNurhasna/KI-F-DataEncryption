<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\requesting;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use phpseclib\Crypt\RSA;
use Illuminate\Support\Str;
use phpseclib\Crypt\AES;
use Illuminate\Support\Facades\Crypt;

class AuthController extends Controller
{
    public function showlogin()
    {
        return view('login', ["title" => "Login"]);
    }

    public function showregister()
    {
        return view('register', ["title" => "Register"]);
    }

    public function storeUser(Request $request)
    {
        $credentials = $request->validate([
            'name' => 'required|max:255',
            'email' => ['required', 'email', 'regex:/^[a-zA-Z0-9_.-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/', 'unique:users,email'],
            'password' => 'required|max:255',
        ]);

        $rsa = new RSA();
        $keyPair = $rsa->createKey();
        $publicKey = $keyPair['publickey'];
        $privateKey = $keyPair['privatekey'];
        try{
            $existingUser = User::where('email', $request['email'])->first();
            if ($existingUser) {
                print('Email already existed\n');
                return redirect()->back()->withInput()->withErrors(['email' => 'Email already exists. Please use a different email.']);
            }
            $aes = new AES();
            $symkey = Str::random(64);
            $aes->setKey($symkey);

            $encryptionKey = env('ENCRYPTION_KEY');

            $userData = new User();
            $userData->publickey = base64_encode(Crypt::encrypt($publicKey, $encryptionKey));
            $userData->privatekey = base64_encode(Crypt::encrypt($privateKey, $encryptionKey));
            $userData->symkey = $symkey;
            $userData->name = base64_encode($aes->encrypt($request->name));
            $userData->email = $request->email;
            $userData->phone = base64_encode($aes->encrypt($request->phone));
            $userData->dateofbirth = base64_encode($aes->encrypt($request->dateofbirth));
            $userData->gender = base64_encode($aes->encrypt($request->gender));
            $userData->address = base64_encode($aes->encrypt($request->address));
            $userData->password = Hash::make($request->password);
            $userData->save();
            
            return redirect()->route('user.showlogin');
        }
        catch (\Illuminate\Validation\ValidationException $e){
            dd($e->getMessage());
        }
    }

    public function login(Request $request){
        try{
            $credentials = $request->validate([
                'email' => ['required', 'email', 'regex:/^[a-zA-Z0-9_.-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/'],
                'password' => 'required|max:255',
            ]);

            if(Auth::attempt($credentials)){
                $request->session()->regenerate();
                $user = Auth::user();
                $userId = $user->id;
                return redirect()->route('user.home', ['userId' => $userId]);
            }
            else{
                return redirect()->back()->withErrors(['login_error' => 'Email and password invalid!']);
            }
        }
        catch (\Illuminate\Validation\ValidationException $e){
            dd($e->getMessage());
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();    
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
