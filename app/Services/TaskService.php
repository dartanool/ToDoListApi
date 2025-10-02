<?php

namespace App\Services;

use App\DTOs\TaskDTO;
use App\Models\Task;
use PhpParser\Builder\Class_;

class TaskService
{

    public function getAll(){
        return Task::query()->get();
    }
    public function create(TaskDTO $taskDTO)
    {
        return Task::create($taskDTO->toArray());
    }
    public function getById(int $id)
    {
        return Task::query()->findOrFail($id);
    }
    public function update(int $id, TaskDTO $taskDTO){
        $tasks = Task::query()->findOrFail($id);
        $tasks->update($taskDTO->toArray());
        return $tasks->fresh();
    }


}
