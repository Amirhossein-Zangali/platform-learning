<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/login', [UserController::class, 'loginPost'])->name('loginPost');
Route::post('/register', [UserController::class, 'registerPost'])->name('registerPost');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
