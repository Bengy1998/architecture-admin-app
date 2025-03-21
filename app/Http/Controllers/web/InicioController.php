<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Proyecto;
use App\Models\RedesSociales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class InicioController extends Controller
{
    public function index()
    {
        $redes_sociales = Cache::get('redes_sociales_list') ?? [];

        $slider = Proyecto::with('tipoProyecto')->get()->map(function ($proyecto) {
            $titulo_palabras = explode(' ', $proyecto->titulo);
            $grupos = [];
            $grupo_actual = [];
            $contador_letras = 0;

            foreach ($titulo_palabras as $palabra) {
                $contador_letras += strlen($palabra);
                $grupo_actual[] = $palabra;

                // Si el grupo actual tiene al menos 8 letras, lo agregamos a los grupos
                if ($contador_letras >= 8) {
                    $grupos[] = implode(' ', $grupo_actual);
                    $grupo_actual = [];
                    $contador_letras = 0;
                }
            }

            // Si quedan palabras en el grupo actual, las agregamos al final
            if (!empty($grupo_actual)) {
                $grupos[] = implode(' ', $grupo_actual);
            }

            // Crear el título transformado con <br> entre los grupos
            $titulo_transformado = implode('<br>', $grupos);

            // Generar el slug a partir del título original
            $proyecto->slug = Str::slug($proyecto->titulo, '-');
            $proyecto->titulo_normal = $proyecto->titulo;
            // Asignar el título transformado
            $proyecto->titulo = $titulo_transformado;

            return $proyecto;
        });

        return view('web.index')->with('redes_sociales', $redes_sociales)->with('slider', $slider);
    }
}
