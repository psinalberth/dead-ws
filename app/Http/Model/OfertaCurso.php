<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class OfertaCurso extends Model
{
    protected $table = 'ofertas_curso';

    protected $fillable = ['curso_id', 'programa_id'];

    public function cursos() {

    	return $this->hasMany('App\Http\Model\Curso');
    }
}
