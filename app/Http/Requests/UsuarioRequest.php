<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UsuarioRequest extends Request
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
            'nome' => 'required', 
            'endereco' => 'required', 
            'formacao' => 'required', 
            'cpf' => 'required', 
            'rg' => 'required', 
            'titulacao' => 'required', 
            'email' => 'required', 
            'telefone' => 'required',
            'login' => 'required', 
            'senha' => 'required', 
            'perfil_id' => 'required', 
            'programa_id' => 'required', 
            'credencial_id' => 'required'
        ];
    }
}
