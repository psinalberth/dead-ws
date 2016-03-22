<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Historico extends Model
{
    protected $fillable = ['data_envio', 'obs', 'plano_ensino_id'];

    public function planoEnsino() {

    	return $this->belongsTo('App\Http\Model\PlanoEnsino');
    }
}
