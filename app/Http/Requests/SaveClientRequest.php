<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        // Verificar si estamos actualizando o creando
        $rules = [
            'username' => 'required|string|min:3|max:20|unique:clients,username,' . ($this->route('client') ? $this->route('client') : ''),
            'name' => 'required|string|max:50',
            'surname' => 'required|string|max:50',
            'email' => 'required|email|max:100|unique:clients,email,' . ($this->route('client') ? $this->route('client') : ''),
            'age' => 'required|integer|min:18|max:100',
        ];

        // Hacer el password obligatorio solo para la creación (si es una actualización, se permite nulo)
        if (!$this->route('client')) {
            // Si no es una actualización, el password es obligatorio
            $rules['password'] = 'required|string|min:8';
        } else {
            // Si es una actualización, el password es opcional
            $rules['password'] = 'nullable|string|min:8';
        }

        return $rules;
    }
}
