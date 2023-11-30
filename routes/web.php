<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// login
Route::get('/login', function () {
    return view('login', [
        "title" => "Login"
    ]);
});

// register
Route::get('/register', function () {
    return view('register', [
        "title" => "Register"
    ]);
});

// dashboard
Route::get('/home', function () {
    return view('home', [
        "name" => "Sarah",
        "title" => "Home"
    ]);
});

// encrypt
Route::get('/encryptdata', function () {
    return view('encryptdata', [
        "title" => "Encrypted Data"
    ]);
});

// decrypt
Route::get('/decryptdata', function () {
    return view('decryptdata', [
        "title" => "Decrypted Data"
    ]);
});

// request
Route::get('/request', function () {
    return view('request', [
        "title" => "Request"
    ]);
});

// sent
Route::get('/sent', function () {
    return view('sent', [
        "title" => "Sent"
    ]);
});