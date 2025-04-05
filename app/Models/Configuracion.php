<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Configuracion extends Model
{
    protected $table = 'configuraciones';
    protected $fillable = ['ciudad', 'pais', 'direccion', 'email', 'telefono', 'red_social_id', 'key_map', 'red_social_detalle'];

    // Relación uno a uno: una configuración tiene una red social seleccionada
    public function redSocial()
    {
        return $this->belongsTo(RedesSociales::class, 'red_social_id');
    }
}
