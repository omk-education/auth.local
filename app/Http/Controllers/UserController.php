<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Отображает страницу Пользователя.
     */
    public function index()
    {
        return inertia('User');
    }

    /**
     * Отображает форму создания Заявки.
     */
    public function create()
    {
        return inertia('Create');
    }
}
