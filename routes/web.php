<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::get('/register', [LoginController::class, 'register'])->name('register');

Route::get('/dashboard-admin',[LoginController::class,'admin'])->name('admin');

Route::get('/dashboard-petugas',[LoginController::class,'petugas'])->name('petugas');
