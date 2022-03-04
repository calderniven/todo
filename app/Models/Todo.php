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

    public function isComplete()
    {
        if ($this->completed_at == null) {
            return false;
        } else {
            return true;
        }
    }

    public function markComplete()
    {
        $this->completed_at = now();
    }

    public function markIncomplete()
    {
        $this->completed_at = null;
    }

    public function toggleCompletion()
    {
        $this->isComplete()
            ? $this->markIncomplete()
            : $this->markComplete();
    }

    public function getToggleButtonText()
    {
        return $this->isComplete()
            ? 'Undo Completion'
            : 'Mark Complete';
    }

    public function getDisplayTitle() {
        return $this->isComplete()
            ? '<strike>' . e($this->title) . '</strike>'
            : e($this->title);
    }
}
