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
Route::get('/login', [AuthController::class, 'login']);
// Route::post('/login', [AuthController::class, 'login']);

// register
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'storeUser']);
Route::post('/register', [DataController::class, 'storeDataUser']);

// home
Route::get('/home', [UserController::class, 'home']);

// encrypt
Route::get('/encryptdata', [DataController::class, 'encrypt']);

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