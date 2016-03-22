<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Anexo extends Model
{
    protected $fillable = ['url', 'tipo_anexo_id', 'conteudo_id'];

    public function tipoAnexo() {

    	return $this->belongsTo('App\Http\Model\TipoAnexo');
    }
}
