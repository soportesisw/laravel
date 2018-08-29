<?php

namespace AppWGC\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PruebaFormRequest extends FormRequest
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
            //
            'idprueba'=>'required|max:20',
            'nombres'=>'required',
            'apellidos'=>'max:30'
        ];
    }
}
