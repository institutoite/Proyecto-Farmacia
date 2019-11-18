<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionPersona extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required|max:25',
            'apellidop' => 'required|max:25',
            'apellidom' => 'required|max:25',
            'fechanacimiento' => 'required', 
            'direccion' => 'required|max:150',
            'genero' => 'required|max:15',
            'telefono' => 'required|max:25',
            'celular' => 'required|max:25'
        ];
    }
}
