<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Route::resource('students', StudentController::class);


use App\Http\Controllers\AuthController;

Route::view('/', 'welcome')->name('welcome');

// Authentication routes
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

