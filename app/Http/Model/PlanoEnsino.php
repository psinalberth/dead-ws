<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class PlanoEnsino extends Model
{
    protected $table = 'planos_ensino';

    protected $fillable = ['status', 'ano', 'semestre_id', 'disciplina_id', 'usuario_id'];

    public function unidades() {

    	return $this->hasMany('App\Http\Model\Unidade', 'plano_ensino_id');
    }

    public function historicos() {

    	return $this->hasMany('App\Http\Model\Historico', 'plano_ensino_id');
    }

    public function semestre() {

    	return $this->hasOne('App\Http\Model\Semestre', 'semestre_id');	
    }

    public function disciplina() {

    	return $this->hasOne('App\Http\Model\Disciplina', 'disciplina_id');	
    }
}
