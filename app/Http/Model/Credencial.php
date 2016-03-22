<?php

namespace App\Http\Model;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Credencial extends Model implements AuthenticatableContract,
                                    	  AuthorizableContract,
                                    	  CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    protected $table = 'credenciais';

    protected $fillable = ['email', 'login', 'password'];

    protected $hidden = ['password'];

    public function usuario() {

    	return $this->hasOne('App\Http\Model\Usuario', 'credencial_id');
    }
}
