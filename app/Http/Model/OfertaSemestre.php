<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class OfertaSemestre extends Model
{
    protected $table = 'ofertas_semestre';

    protected $fillable = ['curso_id', 'semestre_id'];

    public function cursos() {

    	return $this->hasMany('App\Http\Model\Curso');
    }
}
