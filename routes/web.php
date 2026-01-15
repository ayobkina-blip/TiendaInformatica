<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProductosController;
use Illuminate\Support\Facades\Route;

// LOGIN
Route::get('/', [LoginController::class, 'showLogin'])->name('login');
Route::post('/', [LoginController::class, 'iniciarSesion'])->name('login.post');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// REGISTER
Route::get('/registro', [RegisterController::class, 'showRegister'])->name('registro');
Route::post('/registro', [RegisterController::class, 'crearCuenta'])->name('register.post');

// PRODUCTOS

Route::middleware(['auth'])->group(function () {
    
    Route::get('/menu', [ProductosController::class, 'index'])->name('menu');
    
    Route::get('/menu/{producto}', [ProductosController::class, 'show'])->name('productos.show');
    
    Route::post('/productos', [ProductosController::class, 'store'])->name('productos.store');
});