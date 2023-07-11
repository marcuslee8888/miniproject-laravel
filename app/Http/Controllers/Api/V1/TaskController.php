<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\StoreTaskRequest;     //for validation rules
use App\Http\Requests\UpdateTaskRequest;        //for validation rules
use App\Http\Resources\TaskResource;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TaskController extends Controller
{
    public function index() 
    {
        //index function
        return TaskResource::collection(Task::all());
    }

    public function store(StoreTaskRequest $request)    //store new task, post request
    {

        //store function
        $task = Task::create($request->validated());

        return TaskResource::make($task);
    }

    public function show(Task $task)    //retrieve specific task, get request
    {
        return TaskResource::make($task);
    }

    public function update(UpdateTaskRequest $request, Task $task)  //update new task, put request
    {
        $task->update($request->validated());

        return TaskResource::make($task);
    }

    public function destroy(Task $task)     //delete task, delete request
    {
        $task->delete();

        return response()->noContent();
    }
}
