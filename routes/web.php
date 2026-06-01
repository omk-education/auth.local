<?php

use Illuminate\Support\Facades\Route;
// Используем контроллер.
use App\Http\Controllers\HomeController;

// Стартовая страница.
Route::get('/', [HomeController::class, 'index'])->name('home');

// Неавторизованные пользователи
Route::middleware(['guest'])->group(function () {
    //
});

// Авторизованные пользователи
Route::middleware(['auth'])->group(function () {
    //

    // Пользователи
    Route::middleware(['can:user'])->group(function () {
        //

    });

    // Администраторы
    Route::middleware(['can:admin'])->group(function () {
        //

    });
});
