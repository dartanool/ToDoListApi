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
    }
}
