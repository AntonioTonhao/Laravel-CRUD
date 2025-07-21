<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chamado extends Model
{
    protected $fillable = [
        'ticket',
        'about_ticket',
        'prioridade',
        'status'
    ];
}
