<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Semestre extends Model
{
    protected $fillable = ['indice_semestre', 'ano'];

    public function planosEnsino() {

    	return $this->belongsToMany('App\Http\Model\PlanoEnsino');
    }

}
