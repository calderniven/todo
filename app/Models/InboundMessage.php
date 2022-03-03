<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InboundMessage extends Model
{
    protected $table = 'inbound_messages';
    protected $fillable = ['name', 'email', 'message'];
}
