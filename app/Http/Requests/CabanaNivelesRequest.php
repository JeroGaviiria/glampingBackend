<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Foundation\Http\FormRequest;

class CabanaNivelesRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {

        $nivelId = $this->route('nivel');
        return [
            'nombre' => 'required|string|max:255|unique:cabana_niveles,nombre,' . $nivelId,
            'descripcion' => 'required|string|max:1000',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json($validator->errors(), 422));
    }
}
