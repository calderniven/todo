<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\TodoListController;
use Illuminate\Support\Facades\Route;


Route::get('/', [SiteController::class, 'index']);

Route::get('/todo-lists', [TodoListController::class, 'showTodoLists']);
Route::get('/todo-lists/create', [TodoListController::class, 'showTodoListForm']);
Route::post('/todo-lists/create', [TodoListController::class, 'submitTodoListForm']);
Route::get('/todo-lists/{id}', [TodoListController::class, 'showTodoListDetail']);

Route::post('/todos/create', [TodoController::class, 'createTodo']);
Route::patch('/todos/complete/{id}', [TodoController::class, 'toggleTodo']);
Route::delete('/todos/delete/{id}', [TodoController::class, 'deleteTodo']);

Route::get('/contact', [ContactController::class, 'showContactForm']);
Route::post('/contact', [ContactController::class, 'submitContactForm']);