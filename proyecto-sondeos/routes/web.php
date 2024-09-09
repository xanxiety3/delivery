<?php

use App\Http\Controllers\OpcionRespuestaController;
use App\Http\Controllers\PreguntaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SondeoController;
use App\Http\Controllers\UserController;
use App\Models\Tipo_documento;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// rutAASASS 

Route::get('sondeo', [SondeoController::class, 'index'])->name('sondeos.index');


Route::get('register', [RegisterController::class, 'index'])->name('user.register');
Route::post('register', [RegisterController::class, 'register']);

Route::get('login', [UserController::class, 'index'])->name('user.login');
Route::post('login', [UserController::class,'login']);


Route::delete('logout', [UserController::class,'logout']);


Route::get('create', [SondeoController::class, 'create'])->name('sondeos.create');
Route::post('create', [SondeoController::class, 'store']);

Route::get('sondeos/{id}', [SondeoController::class, 'show'])->name('sondeos.show');
Route::post('createPregunta', [PreguntaController::class, 'store'])->name('preguntas.store');
Route::post('createPregunta', [OpcionRespuestaController::class, 'store'])->name('opciones.store');