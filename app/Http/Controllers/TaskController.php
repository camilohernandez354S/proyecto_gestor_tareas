<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('index', compact('tasks'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        Task::create($request->all());
        return redirect()->route('index')->with('success', 'Tarea creada correctamente.');
    }

    public function edit($id)
    {
        $task = Task::findOrFail($id);
        return view('edit', compact('task'));
    }
    

    public function update($id, Request $request)
    {
        $task = Task::findOrFail($id);
        $task->update([
            'status' => $request->input('status')
        ]);

        return redirect()->route('index')->with('success', 'Tarea actualizada correctamente.');
    }

    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
    
        return redirect()->route('index')->with('success', 'Tarea eliminada correctamente.');
    }
    
}
