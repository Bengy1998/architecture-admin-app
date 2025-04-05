<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $table = 'contactos';

    protected $fillable = [
        'nombre',
        'correo',
        'asunto',
        'mensaje',
        'estado',
    ];

    protected $appends = ['estado_nombre'];

    /**
     * Accesor para obtener el nombre del estado.
     */
    public function getEstadoNombreAttribute(): string
    {
        return match ($this->estado) {
            1 => 'Sin atender',
            2 => 'Visto',
            3 => 'Correo enviado',
            default => 'Desconocido',
        };
    }
}
