<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function store(Request $request)
    {
        $task = Task::create($request->all());

        return response()->json([
            "id" => $task->id,
            "name" => $task->name,
            "description" => $task->description,
            "user" => $task->user->name,
            "company" => [
                "id" => $task->company->id,
                "name" => $task->company->name,
            ]
        ], 201);
    }
}
