<?php

namespace App\Http\Controllers\Api;

use App\DTOs\TaskDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Http\Resources\TaskResource;
use App\Services\TaskService;
use GuzzleHttp\Psr7\Request;
use Illuminate\Http\JsonResponse;

class TaskController extends Controller
{
    public function __construct(public TaskService $taskService)
    {
    }
    /**
     * Просмотр списка задач
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        $tasks = $this->taskService->getAll();
        return TaskResource::collection($tasks);
    }

    /**
     * Просмотр одной задач
     *
     * @param int $id идентификатор задачи
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(int $id ): JsonResponse
    {
        $task = $this->taskService->getById($id);
        return response()->json(new TaskResource($task));
    }

    /**
     * Создание задачи
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreTaskRequest $request): JsonResponse
    {
        $taskDTO = TaskDTO::fromArray($request->validated());
        $task = $this->taskService->create($taskDTO);

        return response()->json(new TaskResource($task));
    }

    /**
     * Обновление задачи
     *
     * @param UpdateTaskRequest $request объект запроса, содержащий данные для обновления задачи.
     * @param int $id идентификатор задачи
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateTaskRequest $request, int $id): JsonResponse
    {
        $taskDTO = TaskDTO::fromArray($request->validated());
        $task = $this->taskService->update($id, $taskDTO);

        return response()->json(new TaskResource($task));
    }

    /**
     * Обновление задачи
     *
     * @param int $id идентификатор задачи
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        $this->taskService->delete($id);

        return response()->json([], 201);
    }
}

