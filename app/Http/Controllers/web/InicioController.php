<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Proyecto;
use App\Models\RedesSociales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use Carbon\Carbon;

class InicioController extends Controller
{
    public function index()
    {
        $redes_sociales = Cache::get('redes_sociales_list') ?? collect([]);
        $proyectos = Cache::get('proyectos_list') ?? collect([]);
        $tipo_proyecto = Cache::get('tipo_proyecto_list') ?? collect([]);

        $proyectos = $proyectos->map(function ($proyecto) {
            // Transformar titulo_slider
            $titulo_slider_palabras = explode(' ', $proyecto->titulo_slider);
            $grupos_slider = [];
            $grupo_actual_slider = [];
            $contador_letras_slider = 0;

            foreach ($titulo_slider_palabras as $palabra) {
                $contador_letras_slider += strlen($palabra);
                $grupo_actual_slider[] = $palabra;

                if ($contador_letras_slider >= 8) {
                    $grupos_slider[] = implode(' ', $grupo_actual_slider);
                    $grupo_actual_slider = [];
                    $contador_letras_slider = 0;
                }
            }

            if (!empty($grupo_actual_slider)) {
                $grupos_slider[] = implode(' ', $grupo_actual_slider);
            }

            $titulo_slider_transformado = implode('<br>', $grupos_slider);

            // Transformar titulo
            $titulo_palabras = explode(' ', $proyecto->titulo);
            $grupos_titulo = [];
            $grupo_actual_titulo = [];
            $contador_letras_titulo = 0;

            foreach ($titulo_palabras as $palabra) {
                $contador_letras_titulo += strlen($palabra);
                $grupo_actual_titulo[] = $palabra;

                if ($contador_letras_titulo >= 8) {
                    $grupos_titulo[] = implode(' ', $grupo_actual_titulo);
                    $grupo_actual_titulo = [];
                    $contador_letras_titulo = 0;
                }
            }

            if (!empty($grupo_actual_titulo)) {
                $grupos_titulo[] = implode(' ', $grupo_actual_titulo);
            }

            $titulo_transformado = implode('<br>', $grupos_titulo);

            // Generar descripcion_detalle
            $descripcion_palabras = explode(' ', $proyecto->descripcion);
            $descripcion_corta = implode(' ', array_slice($descripcion_palabras, 0, 25)) . (count($descripcion_palabras) > 25 ? '...' : '');

            // Formatear fecha_termino
            if (!empty($proyecto->fecha_termino)) {
                $proyecto->fecha_termino_formateada = Carbon::parse($proyecto->fecha_termino)->locale('es')->isoFormat('D [de] MMMM [del] YYYY');
            }

            // Generar slugs
            $proyecto->slug = Str::slug($proyecto->titulo_slider, '-');
            $proyecto->slug_tipo_proyecto = Str::slug($proyecto->tipoProyecto->nombre, '-');
            $proyecto->titulo_slider_normal = $proyecto->titulo_slider;

            // Asignar los títulos transformados y descripcion_detalle
            $proyecto->titulo_slider = $titulo_slider_transformado;
            $proyecto->titulo_transformado = $titulo_transformado;
            $proyecto->descripcion_detalle = $descripcion_corta;

            return $proyecto;
        });

        $tipo_proyecto = $tipo_proyecto->map(function ($tipo) {
            $tipo->slug = Str::slug($tipo->nombre, '-');
            return $tipo;
        });

        $slider = $proyectos->where('es_slider', true)->all();
        return view('web.index')->with('redes_sociales', $redes_sociales)->with('slider', $slider)->with('tipo_proyectos', $tipo_proyecto)->with('proyectos', $proyectos);
    }
}
