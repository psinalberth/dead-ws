<?php

namespace App\Http\Requests;

use Auth;
use App\Http\Requests\Request;
use JWTAuth;

class CursoRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (! $user = JWTAuth::parseToken()) {

            return false;
        }

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
            'nome' => 'required',
            'descricao' => 'required'
        ];
    }
}
