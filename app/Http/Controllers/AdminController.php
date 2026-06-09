<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Отображает страницу Администратора.
     */
    public function index()
    {
        return inertia('Admin');
    }
}
