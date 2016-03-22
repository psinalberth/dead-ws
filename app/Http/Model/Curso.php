<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = ['nome', 'descricao'];

    public function ofertasCurso() {

    	return $this->belongsToMany('App\Http\Model\OfertaCurso');
    }

    public function ofertasSemestre() {

    	return $this->belongsToMany('App\Http\Model\OfertaSemestre');
    }
}
