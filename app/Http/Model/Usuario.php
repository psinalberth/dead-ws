<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = ['nome', 'endereco', 'formacao', 'cpf', 'rg', 
    					   'titulacao', 'email', 'telefone',
    					   'login', 'senha', 'perfil_id', 'programa_id', 'credencial_id'];
}
