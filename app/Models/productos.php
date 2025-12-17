<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    protected $fillable = [
        'name',
        'descripcion',
        'precio',
        'stock',
        'categoria_id',
    ];
}