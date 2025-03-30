<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Task::all();
    }

    public function store(Request $request)
    {
        return Task::create($request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'status' => 'sometimes|in:pending,in_progress,completed'
        ]));
    }

    public function show(Task $task)
    {
        return $task;
    }

    public function update(Request $request, Task $task)
    {
        $task->update($request->validate([
            'title' => 'sometimes',
            'description' => 'nullable',
            'status' => 'sometimes|in:pending,in_progress,completed'
        ]));
        return $task;
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return response()->noContent();
    }
}
