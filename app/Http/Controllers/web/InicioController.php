<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Configuracion;
use App\Models\Proyecto;
use App\Models\QueHacemos;
use App\Models\RedesSociales;
use App\Models\SobreNosotros;
use App\Models\TipoProyecto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use Carbon\Carbon;

class InicioController extends Controller
{
    public function index()
    {
        $redes_sociales = Cache::remember('redes_sociales_list', 3600, function () {
            return RedesSociales::all(); // Aquí puedes cargar las redes sociales desde la base de datos si es necesario
        });

        $proyectos = Cache::remember('proyectos_list', 3600, function () {
            return Proyecto::all(); // Aquí puedes cargar los proyectos desde la base de datos si es necesario
        });

        $tipo_proyecto = Cache::remember('tipo_proyecto_list', 3600, function () {
            return TipoProyecto::all(); // Aquí puedes cargar los tipos de proyectos desde la base de datos si es necesario
        });

        $proyectos = $this->transformarProyectos($proyectos);
        $tipo_proyecto = $this->transformarTiposProyecto($tipo_proyecto);

        $slider = Cache::remember('slider_proyectos', 3600, function () use ($proyectos) {
            return $proyectos->where('es_slider', true)->all();
        });

        $sobre_nosotros = Cache::remember('sobre_nosotros', 3600, function () {
            return SobreNosotros::first(); // Aquí puedes cargar la información de "Sobre Nosotros" desde la base de datos si es necesario
        });

        $que_hacemos = Cache::remember('que_hacemos', 3600, function () {
            return QueHacemos::first(); // Aquí puedes cargar la información de "Qué Hacemos" desde la base de datos si es necesario
        });

        $configuracion = Cache::remember('configuracion', 3600, function () {
            return Configuracion::first(); // Aquí puedes cargar la configuración desde la base de datos si es necesario
        });

        return view('web.index')
            ->with('redes_sociales', $redes_sociales)
            ->with('slider', $slider)
            ->with('tipo_proyectos', $tipo_proyecto)
            ->with('proyectos', $proyectos)
            ->with('sobre_nosotros', $sobre_nosotros)
            ->with('que_hacemos', $que_hacemos)
            ->with('configuracion', $configuracion);
    }

    private function transformarProyectos($proyectos)
    {
        return Cache::remember('proyectos_transformados', 3600, function () use ($proyectos) {
            return $proyectos->map(function ($proyecto) {
                $proyecto->titulo_slider = $this->transformarTexto($proyecto->titulo_slider);
                $proyecto->titulo_transformado = $this->transformarTexto($proyecto->titulo);
                $proyecto->descripcion_detalle = $this->generarDescripcionCorta($proyecto->descripcion);

                if (!empty($proyecto->fecha_termino)) {
                    $proyecto->fecha_termino_formateada = Carbon::parse($proyecto->fecha_termino)
                        ->locale('es')
                        ->isoFormat('D [de] MMMM [del] YYYY');
                }

                $proyecto->slug = Str::slug($proyecto->titulo_slider, '-');
                $proyecto->slug_tipo_proyecto = Str::slug($proyecto->tipoProyecto->nombre ?? '', '-');
                $proyecto->titulo_slider_normal = $proyecto->titulo_slider;

                return $proyecto;
            });
        });
    }

    private function transformarTiposProyecto($tipo_proyecto)
    {
        return Cache::remember('tipos_proyecto_transformados', 3600, function () use ($tipo_proyecto) {
            return $tipo_proyecto->map(function ($tipo) {
                $tipo->slug = Str::slug($tipo->nombre, '-');
                return $tipo;
            });
        });
    }

    private function transformarTexto($texto)
    {
        $palabras = explode(' ', $texto);
        $grupos = [];
        $grupo_actual = [];
        $contador_letras = 0;

        foreach ($palabras as $palabra) {
            $contador_letras += strlen($palabra);
            $grupo_actual[] = $palabra;

            if ($contador_letras >= 8) {
                $grupos[] = implode(' ', $grupo_actual);
                $grupo_actual = [];
                $contador_letras = 0;
            }
        }

        if (!empty($grupo_actual)) {
            $grupos[] = implode(' ', $grupo_actual);
        }

        return implode('<br>', $grupos);
    }

    private function generarDescripcionCorta($descripcion)
    {
        $palabras = explode(' ', $descripcion);
        return implode(' ', array_slice($palabras, 0, 25)) . (count($palabras) > 25 ? '...' : '');
    }
}
