<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create([
            'title' => 'Изучить Laravel',
            'description' => 'Пройти тестовое задание',
            'status' => 'pending',
        ]);

        Task::create([
            'title' => 'Сдать проект',
            'description' => 'Загрузить на GitHub',
            'status' => 'done',
        ]);

        Task::create([
            'title' => 'Сделать домашнее задание',
            'description' => 'Закончить проект по Laravel',
            'status' => 'pending',
        ]);

        Task::create([
            'title' => 'Купить продукты',
            'description' => 'Молоко, хлеб, яйца',
            'status' => 'done',
        ]);

        Task::create([
            'title' => 'Позвонить маме',
            'description' => null,
            'status' => 'in_progress',
            ]);
    }
}
