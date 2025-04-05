<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QueHacemos extends Model
{
    protected $table = 'que_hacemos';

    protected $fillable = [
        'arquitectura_detalle',
        'diseno_interiores_detalle',
        'planos_detalle',
    ];
}
