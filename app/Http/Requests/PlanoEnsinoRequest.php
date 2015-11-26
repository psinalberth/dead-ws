<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PlanoEnsinoRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'status' => 'required', 
            'ano' => 'required', 
            'semestre_id' => 'required', 
            'disciplina_id' => 'required', 
            'usuario_id' => 'required'
        ];
    }
}
