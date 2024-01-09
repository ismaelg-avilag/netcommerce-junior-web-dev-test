<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:1|max:255',
            'description' => 'required|string|min:1|max:255',
            'user_id' => 'required|exists:App\Models\User,id',
            'company_id' => 'required|exists:App\Models\Company,id',
        ]);

        if(Task::where('user_id', $request->user_id)->where('is_completed', false)->count() > 5) {
            return response()->json([
                "message" => "You can't have more than 5 uncompleted tasks"
            ], 400);
        }

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
