<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Unidade extends Model
{
    protected $fillable = ['data_inicio', 'data_fim', 'plano_ensino_id'];

    public function planoEnsino() {

    	return $this->belongsTo('App\Http\Model\PlanoEnsino');
    }

    public function conteudos() {

    	return $this->hasMany('App\Http\Model\Conteudo', 'unidade_id');
    }
}
