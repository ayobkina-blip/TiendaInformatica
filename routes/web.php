<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProductosController;
use Illuminate\Support\Facades\Route;



//LOGIN

//Mostrar el login
Route::get('/', [LoginController::class, 'showLogin'])->name('login');

//Ruta del 'action' del login
Route::post('/', [LoginController::class, 'iniciarSesion'])->name('login.post');

//Ruta a menu
Route::get('/menu', function () { return view('menu'); })->middleware('auth');
Route::get('/menu', [ProductosController::class, 'index'])->name('productos');


//REGISTER

//Mostrar el registro

Route::get('/registro', [RegisterController::class, 'showRegister'])->name('registro');

Route::post('/registro', [RegisterController::class, 'crearCuenta'])->name('register.post');

// LOGOUT

Route::get('/logout', [LoginController::class, 'logout']) ->name('logout');
