<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Todo extends Model
{
    protected $table = 'todos';
    protected $guarded = [];

    public function todoList(): HasOne
    {
        return $this->hasOne(TodoList::class, 'id', 'list_id');
    }
}
