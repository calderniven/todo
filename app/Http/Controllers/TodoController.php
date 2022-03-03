<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function createTodo(Request $request)
    {
        $todo = new Todo($request->only(['title', 'list_id']));
        $todo->save();
        return redirect()->back();
    }

    public function toggleTodo(string $id)
    {
        $todo = Todo::query()->findOrFail($id);

        $todo->completed_at = ($todo->completed_at == null)
            ? now()
            : null;

        $todo->save();

        return redirect()->back();
    }

    public function deleteTodo(string $id) {
        $todo = Todo::query()->findOrFail($id);
        $todo->delete();
    }
}
