<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use JWTAuth;

class ProgramaRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($user = JWTAuth::parseToken()) {

            return true;
        }

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
            'nome' => 'required',
            'sigla' => 'required',
            'descricao' => 'required'
        ];
    }
}
