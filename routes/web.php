<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\TodoListController;
use Illuminate\Support\Facades\Route;


Route::get('/', [SiteController::class, 'index']);

Route::get('todo-lists', [TodoListController::class, 'showTodoLists'])->name('todo-lists.index');

Route::get('/todo-lists/create', [TodoListController::class, 'showTodoListForm']);

Route::post('/todo-lists/create', [TodoListController::class, 'submitTodoListForm']);

Route::get('todo-lists/{id}', [TodoListController::class, 'showTodoListDetail'])->name('todo-lists.detail');

Route::post('todos/create', [TodoController::class, 'createTodo']);