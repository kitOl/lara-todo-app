<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Exception;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        try {
            $todos = Todo::all();
            return view('index', compact('todos'));
        } catch (Exception $e) {
            Log::error($e->getMessage());
        }
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        try {
            $todo = Todo::create([
                'title' => $request->title,
                'description' => $request->description,
            ]);

            if ($todo) {
                return redirect()->route('todos.index')->with('success', 'Todo list created successfully');
            }
            return back()->with('error', 'Unable to create todo. Please try again.');
        } catch (Exception $e) {
            Log::error($e->getMessage());
        }
    }

    public function show(Todo $todo)
    {
        return view('show', compact('todo'));
    }

    public function edit(Todo $todo)
    {
        return view('edit', compact('todo'));
    }

    public function update(Request $request, Todo $todo)
    {
        try {
            $todo['title'] = $request->title;
            $todo['description'] = $request->description;
            $todo->save();
            return redirect()->route('todos.index')->with('success', 'Todo list updated successfully');
        } catch (Exception $e) {
            Log::error($e->getMessage());
        }
    }

    public function destroy(Todo $todo)
    {
        try {
            if ($todo) {
                $todo->deleted;
                return redirect()->route('todos.index')->with('success', 'Todo list deleted successfully!');
            }
            return back()->with('error', 'Todo list not found!');
        } catch (Exception $e) {
            Log::error($e->getMessage());
        }
    }
}
