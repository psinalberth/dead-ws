<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class PlanoEnsino extends Model
{
    protected $fillable = ['status', 'ano', 'semestre_id', 'disciplina_id', 'usuario_id'];
}
