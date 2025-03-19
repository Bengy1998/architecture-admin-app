<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;

    protected $table = 'proyectos';

    protected $fillable = [
        'titulo',
        'imagen_presentacion',
        'imagen_slider',
        'titulo_slider',
        'descripcion',
        'cliente',
        'fecha_termino',
        'tipo_proyecto_id',
        'nombre_arquitecto',
        'presupuesto',
        'imagen_detalle',
    ];

    /**
     * Relación con TipoProyecto.
     */
    public function tipoProyecto()
    {
        return $this->belongsTo(TipoProyecto::class, 'tipo_proyecto_id');
    }
}
