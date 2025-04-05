<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactoRequest;
use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function guardar(ContactoRequest $request)
    {
        // Validar encabezados para mayor seguridad
        if ($request->header('X-CSRF-TOKEN') !== csrf_token()) {
            return response()->json([
                'success' => false,
                'message' => 'Token CSRF inválido.',
            ], 403);
        }

        // Guardar el contacto en la base de datos
        $contacto = Contacto::create([
            'nombre' => $request->nombre,
            'correo' => $request->correo,
            'asunto' => $request->asunto,
            'mensaje' => $request->mensaje,
            'estado' => 1, // Estado inicial: "Sin atender"
        ]);

        // Retornar una respuesta JSON
        return response()->json([
            'success' => true,
            'message' => 'El mensaje se ha enviado correctamente.',
            'data' => $contacto,
        ]);
    }
}
