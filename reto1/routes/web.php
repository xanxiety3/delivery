<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user.login');
});

Route::get('/login', [UserController::class,'index'])->name('user.login');
Route::post('/login', [UserController::class,'login']);

Route::get('/register', [RegisterController::class,'index'])->name('user.register');
Route::post('/register', [RegisterController::class,'register'])->name('user.register');

Route::delete('logout', [UserController::class,'logout']);