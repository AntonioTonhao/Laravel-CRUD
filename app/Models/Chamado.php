<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Chamado extends Model
{
    use HasFactory;  

    protected $fillable = [
        'ticket',
        'about_ticket',
        'prioridade',
        'status',
    ];
}
