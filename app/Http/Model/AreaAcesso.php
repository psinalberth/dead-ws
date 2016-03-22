<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class AreaAcesso extends Model
{
    protected $table = 'areas_acesso';

    protected $fillable = ['perfil_id', 'transacao_id'];

    public function perfis() {

    	return $this->belongsToMany('App\Http\Model\Perfil');
    }
}
