<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    protected $fillable = ['nome', 'descricao'];

    public function planosEnsino() {

    	return $this->belongsToMany('App\Http\Model\PlanoEnsino');
    }
}
