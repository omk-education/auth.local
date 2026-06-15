<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
// Используем контроллер.
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

// Стартовая страница.
Route::get('/', [HomeController::class, 'index'])->name('home');

// Неавторизованные пользователи
Route::middleware(['guest'])->group(function () {
    //
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');
    Route::resource('register', RegisterController::class)->only([
        'create',
        'store'
    ]);
});

// Авторизованные пользователи
Route::middleware(['auth'])->group(function () {
    //
    Route::resource('applications', ApplicationController::class);

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    // Пользователи
    Route::middleware(['can:user'])->group(function () {
        //
        Route::get('/user', [UserController::class, 'index'])->name('user');
        Route::get('/create', [UserController::class, 'create'])->name('create');
    });

    // Администраторы
    Route::middleware(['can:admin'])->group(function () {
        //
        Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    });
});
