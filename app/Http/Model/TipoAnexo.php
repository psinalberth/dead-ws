<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class TipoAnexo extends Model
{
    protected $table = 'tipos_anexo';

    protected $fillable = ['descricao'];

    public function anexos() {

    	return $this->hasMany('App\Http\Model\Anexo', 'tipo_anexo_id');
    }
}
