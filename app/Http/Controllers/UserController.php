<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Отображает страницу пользователя.
     */
    public function index()
    {
        return inertia('User');
    }
    /**
     * Создает заявку
     */
    public function create()
    {
        return inertia('Create');
    }
}
