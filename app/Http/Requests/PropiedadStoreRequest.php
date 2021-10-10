<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropiedadStoreRequest extends FormRequest
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
            'nombre' => 'required|string|max:200',
            'direccion' => 'required|string|max:500',
            'id_vendedor' => 'required|integer|exists:vendedores,id',
            'metros_cuadrados' => 'numeric',
            'descripcion' => 'string|max:1000',
        ];
    }
}
