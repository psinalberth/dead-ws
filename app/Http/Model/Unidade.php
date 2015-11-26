<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Unidade extends Model
{
    protected $fillable = ['data_inicio', 'data_fim', 'plano_ensino_id'];
}
