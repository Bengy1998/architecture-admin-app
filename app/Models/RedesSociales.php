<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Exceptions\MaxRedesSocialesException;

class RedesSociales extends Model
{
    protected $table = 'redes_sociales';

    protected $fillable = [
        'nombre',
        'link',
        'icono',
        'orden'
    ];


}
