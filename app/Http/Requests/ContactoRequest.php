<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactoRequest extends FormRequest
{
    /**
     * Determina si el usuario está autorizado para realizar esta solicitud.
     */
    public function authorize(): bool
    {
        return true; // Cambiar según las necesidades de autorización
    }

    /**
     * Reglas de validación para la solicitud.
     */
    public function rules(): array
    {
        return [
            'nombre' => 'required|string|max:255',
            'correo' => 'required|email|max:255',
            'asunto' => 'required|string|max:255',
            'mensaje' => 'required|string',
        ];
    }

    /**
     * Mensajes personalizados para las reglas de validación.
     */
    public function messages(): array
    {
        return [
            'nombre.required' => 'El campo nombre es obligatorio.',
            'correo.required' => 'El campo correo es obligatorio.',
            'correo.email' => 'El correo debe ser una dirección válida.',
            'asunto.required' => 'El campo asunto es obligatorio.',
            'mensaje.required' => 'El campo mensaje es obligatorio.',
        ];
    }
}
