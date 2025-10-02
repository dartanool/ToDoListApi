<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TaskController;

Route::get('/test', function () {
    return response()->json(['status' => 'ok']);
});
Route::apiResource('tasks', TaskController::class);
