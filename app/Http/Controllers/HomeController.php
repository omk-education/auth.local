<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Отображает стартовую страницу.
     */
    public function index()
    {
        return inertia('Home');
    }
}
