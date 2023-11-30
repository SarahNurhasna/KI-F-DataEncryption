<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EncryptDecryptController;
use App\Http\Controllers\InboxController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\SentController;
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
Route::get('/login', [AuthController::class, 'login']);

// register
Route::get('/register', [AuthController::class, 'register']);

// home
Route::get('/home', [HomeController::class, 'home']);

// encrypt
Route::get('/encryptdata', [EncryptDecryptController::class, 'encrypt']);

// decrypt
Route::get('/decryptdata', [EncryptDecryptController::class, 'decrypt']);

// request
Route::get('/request', [RequestController::class, 'request']);

// data requested
Route::get('/datarequested', [RequestController::class, 'datarequested']);

// sent
Route::get('/sent', [SentController::class, 'sent']);

// inbox
Route::get('/inbox', [InboxController::class, 'inbox']);