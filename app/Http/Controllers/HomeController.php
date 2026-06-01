<?php

namespace App\Http\Controllers;

// Подключаем классы библиотеки Inertia для отображения Vue-компонентов.
use Inertia\Inertia;
use Inertia\Response;

class HomeController extends Controller
{
    /**
     * Отображает стартовую страницу.
     */
    public function index(): Response
    {
        // Возвращает Vue-компонент.
        return Inertia::render('Home');
    }
}