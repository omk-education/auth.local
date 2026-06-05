<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Форма регистрации
     */
    public function create()
    {
        return inertia('auth/Register');
    }

    /**
     * Сохранение пользователя
     */
    public function store(RegisterRequest $request)
    {
        // доработать авторизацию
        User::create($request->validated());

        return redirect('/');
    }


}
