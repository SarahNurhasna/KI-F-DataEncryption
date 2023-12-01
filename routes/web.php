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

Route::middleware(['auth'])->group(function (){
    // home
    Route::get('/home/{userId}', [UserController::class, 'showhome'])->name('user.home');

    // encrypt
    Route::get('/encryptdata/{userId}', [DataController::class, 'encrypt'])->name('dataencrypt');

    // decrypt
    Route::get('/decryptdata/{userId}', [DataController::class, 'decrypt'])->name('datadecrypt');

    // request
    Route::get('/request/{userId}', [RequestController::class, 'showrequest'])->name('showrequest');
    Route::post('/request/{userId}', [RequestController::class, 'request'])->name('request');

    // data requested
    Route::get('/datarequested/{userId}', [RequestController::class, 'datarequested'])->name('datarequested');

    // sent
    Route::get('/sent/{userId}', [SentController::class, 'showsent'])->name('sent');

    // inbox
    Route::get('/inbox/{userId}', [UserController::class, 'inbox'])->name('inbox');
});
