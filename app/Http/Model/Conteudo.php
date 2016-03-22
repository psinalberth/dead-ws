<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Conteudo extends Model
{
    protected $fillable = ['titulo', 'descricao', 'unidade_id'];

    public function anexos() {

    	return $this->hasMany('App\Http\Model\Anexo', 'conteudo_id');
    }

    public function unidades() {

    	return $this->belongsToMany('App\Http\Model\Unidade');
    }
}
