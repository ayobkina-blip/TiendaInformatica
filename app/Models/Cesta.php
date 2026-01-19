<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cesta extends Model
{
    protected $table = 'cesta';
    public $timestamps = false;
    
    protected $fillable = [
        'usuario_id',
        'producto_id',
        'cantidad'
    ];
    public function producto()
    {
        return $this->belongsTo(productos::class, 'producto_id');
    }
    
}