<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Credencial extends Model
{
    protected $fillable = ['email', 'login', 'senha'];
}
