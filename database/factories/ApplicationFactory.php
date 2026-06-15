<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Application>
 */
class ApplicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement(
                [
                    'Основы алгоритмизации и программирования',
                    'Основы веб-дизайна',
                    'Основы проектирования баз данных'
                ]
            ),
            'date' => fake()->date(),
            'pay' => fake()->randomElement(
                [
                    'Наличными',
                    'Переводом по номеру телефона',
                ]
            ),
            'status' => fake()->randomElement(
                [
                    'Новая',
                    'Идет обучение',
                    'Обучение завершено',
                ]
            ),
            'review' => fake()->text(),
            'user_id' => 1,
        ];
    }
}
