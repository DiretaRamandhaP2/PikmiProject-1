<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\JenisSampahController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route::resource('wargas', WargaController::class);
// Route::resource('jenis-sampahs', JenisSampahController::class);
// Route::resource('petugas', PetugasController::class);
// Route::resource('users', UserController::class);

// Route::get('/login', [LoginController::class, 'login'])->name('login');

// Route::get('/register', [LoginController::class, 'register'])->name('register');

Route::get('/dashboard-admin',[LoginController::class,'admin'])->name('admin');
