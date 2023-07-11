<?php

use App\Http\Controllers\Api\V1\CompleteTaskController;
use App\Http\Controllers\Api\V1\TaskController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::apiResource('/tasks', TaskController::class);    //perform CRUD operations
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {   //for authentication use
    return $request->user();
});




