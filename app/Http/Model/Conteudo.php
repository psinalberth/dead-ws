<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Conteudo extends Model
{
    protected $fillable = ['titulo', 'descricao', 'unidade_id'];
}
