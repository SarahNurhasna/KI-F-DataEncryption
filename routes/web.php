<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\SentController;
use App\Http\Controllers\UserController;
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
Route::get('/login', [AuthController::class, 'showlogin'])->name('user.showlogin');
Route::post('/login', [AuthController::class, 'login'])->name('user.login');

// register
Route::get('/register', [AuthController::class, 'showregister']);
Route::post('/register', [AuthController::class, 'storeUser'])->name('user.register');

// home
Route::get('/home/{userId}', [UserController::class, 'showhome'])->name('user.home');

// encrypt
Route::get('/home/{userId}/encryptdata', [DataController::class, 'encrypt']);

// decrypt
Route::get('/decryptdata', [DataController::class, 'decrypt']);

// request
Route::get('/request', [RequestController::class, 'request']);

// data requested
Route::get('/datarequested', [RequestController::class, 'datarequested']);

// sent
Route::get('/sent', [SentController::class, 'sent']);

// inbox
Route::get('/inbox', [UserController::class, 'inbox']);