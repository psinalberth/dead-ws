<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Transacao extends Model
{
    protected $table = 'transacoes';

    protected $fillable = ['descricao', 'url'];
}
