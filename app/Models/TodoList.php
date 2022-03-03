<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TodoList extends Model
{
  protected $table = 'lists';
  protected $fillable = ['name'];

  public function todos(): HasMany
  {
    return $this->hasMany(Todo::class, 'list_id', 'id');
  }
}
