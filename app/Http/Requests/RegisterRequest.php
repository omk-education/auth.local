<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Авторизация доступа
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Правила валидации
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'email' => ['required', 'email', 'unique:users,email'],
            'login' => ['required', 'string', 'min:6', 'unique:users,login'],
            'tel' => ['required', 'string', 'unique:users,tel'],
            'password' => ['required', 'min:8', 'max:255'],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Введите ФИО',
            'name.string' => 'Поле ФИО должно быть строкой',

            'email.required' => 'Введите почту',
            'email.email' => 'Введите корректную почту',
            'email.unique' => 'Данная почта уже используется',

            'login.required' => 'Введите логин',
            'login.string' => 'Поле логин должно быть строкой',
            'login.min' => 'Поле логин должно быть минимум 6 символов',
            'login.unique' => 'Данный логин уже используется',

            'tel.required' => 'Введите телефон',
            'tel.string' => 'Поле телефон должно быть строкой',
            'tel.unique' => 'Данный телефон уже используется',

            'password.required' => 'Введите пароль',
            'password.min' => 'Пароль должен быть минимум 8 символов',
            'password.max' => 'Пароль должен быть меньше 255 символов',
        ];
    }
}
