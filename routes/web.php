<?php

use Illuminate\Support\Facades\Route;
// Используем контроллер.
use App\Http\Controllers\HomeController;

// Стартовая страница.
Route::get('/', [HomeController::class, 'index'])->name('home');