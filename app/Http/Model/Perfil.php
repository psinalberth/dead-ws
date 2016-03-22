<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $table = 'perfis';

    protected $fillable = ['nome', 'descricao'];

    public function usuarios() {

    	return $this->hasMany('App\Http\Model\Usuario', 'perfil_id');
    }

    public function areasAcesso() {

    	return $this->hasMany('App\Http\Model\AreaAcesso', 'perfil_id');	
    }
}
