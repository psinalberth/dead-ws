<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    protected $fillable = ['nome', 'sigla', 'descricao'];

    public function usuarios() {

    	return $this->hasMany('App\Http\Model\Usuario', 'programa_id');
    }

    public function ofertasCurso() {

    	return $this->hasMany('App\Http\Model\OfertaCurso', 'programa_id');
    }
}
