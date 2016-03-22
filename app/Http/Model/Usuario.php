<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use App\Http\Model\Perfil;

class Usuario extends Model
{
    protected $fillable = ['nome', 'endereco', 'formacao', 'cpf', 'rg', 'titulacao', 
                           'telefone', 'perfil_id', 'programa_id', 'credencial_id'];

   	public function credencial() {

   		return $this->belongsTo('App\Http\Model\Credencial');
   	}

   	public function perfil() {

   		return $this->belongsTo('App\Http\Model\Perfil');
   	}

   	public function programa() {

   		return $this->belongsTo('App\Http\Model\Programa'); 
   	}

    public function planosEnsino() {

      return $this->belongsToMany('App\Http\Model\PlanoEnsino');
    }

    public function isProfessor() {
        
        return $this->perfil == Perfil::where('nome', 'Professor')->first();
    }

    public function isCoordenador() {

      return $this->perfil == Perfil::where('nome', 'Coordenador')->first();
    }
}
