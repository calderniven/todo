<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function createTodo(Request $request) {
        //$todo = new Todo();
        dd($request->only(['title', 'list_id']));

    }
}
