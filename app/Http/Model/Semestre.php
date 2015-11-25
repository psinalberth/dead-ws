<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Semestre extends Model
{
    protected $fillable = ['indice_semestre', 'ano', 'curso_id'];
}
