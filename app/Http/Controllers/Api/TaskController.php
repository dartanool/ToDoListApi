<?php

namespace App\Http\Controllers\Api;

use App\DTOs\TaskDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Services\TaskService;
use GuzzleHttp\Psr7\Request;
use Illuminate\Http\JsonResponse;

class TaskController extends Controller
{
    public function __construct(public TaskService $taskService)
    {
    }

    public function index(): JsonResponse
    {
        $tasks = $this->taskService->getAll();
        return response()->json($tasks);
    }

    public function show(int $id ): JsonResponse
    {
        $task = $this->taskService->getById($id);
        return response()->json($task);
    }
    public function store(StoreTaskRequest $request): JsonResponse
    {
        $taskDTO = TaskDTO::fromArray($request->validated());
        $task = $this->taskService->create($taskDTO);

        return response()->json($task,201);
    }
    public function update(UpdateTaskRequest $request, int $id): JsonResponse
    {
        $taskDTO = TaskDTO::fromArray($request->validated());
        $task = $this->taskService->update($id, $taskDTO);

        return response()->json($task);
    }

    public function destroy(int $id): JsonResponse
    {
        $this->taskService->delete($id);

        return response()->json([], 201);
    }
}

