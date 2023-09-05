<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        //validación
        return [
                'name' => 'required|max:10',
                'descripcion' => 'required|min:10',
                'categoria' => 'required'
        ];
    }

    //cambiamos los nombres de los atributos que se muestran en el mensaje de validación
    public function attributes()
    {
        return [
            'name' => 'nombre del curso',
        ];
    }

    public function messages()
    {
        return [
            'descripcion.required' => 'Debe ingresar una descripción del curso'
        ];
    }
}
