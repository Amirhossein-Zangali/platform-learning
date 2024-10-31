<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CourseController;

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/login', [UserController::class, 'loginPost'])->name('loginPost');
Route::post('/register', [UserController::class, 'registerPost'])->name('registerPost');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::resource('courses', CourseController::class)->middleware('auth');
