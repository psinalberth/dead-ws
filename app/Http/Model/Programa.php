<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    protected $fillable = ['nome', 'sigla', 'descricao'];
}
