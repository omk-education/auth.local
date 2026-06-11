<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Отображает стартовую страницу.
     */
    public function index()
    {
        return inertia('Admin');
    }
}
