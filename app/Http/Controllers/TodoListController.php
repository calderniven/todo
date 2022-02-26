<?php

namespace App\Http\Controllers;

use App\Models\TodoList;
use Illuminate\Http\Request;

class TodoListController extends Controller
{
    public function showTodoLists()
    {
        return view('lists.index', [
            'lists' => TodoList::query()->get(),
        ]);
    }

    public function showTodoListForm()
    {
        return view('lists.create');
    }

    public function submitTodoListForm(Request $request)
    {
        $todoList = new TodoList();
        $todoList->name = $request->input('name');
        $todoList->save();
        return redirect()->route('todo-lists.index');
    }

    public function showTodoListDetail(string $id) {
        return view('lists.detail', [
            'list' => TodoList::query()->findOrFail($id)
        ]);
    }
}
