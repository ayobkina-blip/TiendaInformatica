<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;



//LOGIN

//Mostrar el login
Route::get('/', [LoginController::class, 'showLogin'])->name('login');

//Ruta del 'action' del login
Route::post('/', [LoginController::class, 'iniciarSesion'])->name('login.post');

//Ruta a menu
Route::get('/menu', function () {
    return view('menu');
})->middleware('auth');


//REGISTER

//Mostrar el registro

Route::get('/registro', [RegisterController::class, 'showRegister'])->name('registro');

Route::post('/registro', [RegisterController::class, 'crearCuenta'])->name('register.post');
