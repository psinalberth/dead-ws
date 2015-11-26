<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Historico extends Model
{
    protected $fillable = ['data_envio', 'obs', 'plano_ensino_id'];
}
