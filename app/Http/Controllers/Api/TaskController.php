<?php

namespace App\Http\Controllers\Api;

use App\DTOs\TaskDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTaskRequest;
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

    public function store(StoreTaskRequest $request): JsonResponse
    {
        $taskDTO = TaskDTO::fromArray($request->validated());
        $task = $this->taskService->create($taskDTO);
        return response()->json($task,201);

    }
}
