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
    return "Bienvenido, has logrado entrar sin romper nada.";
})->middleware('auth');


//REGISTER

//Mostrar el registro

Route::get('/registro', [RegisterController::class, 'showRegister'])->name('registro');