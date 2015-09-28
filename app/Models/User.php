<?php

namespace App\Models;

use App\Models\Session\Game;
use App\Traits\HasRoles;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\Access\Authorizable;

class User extends BaseModel implements AuthenticatableContract,
                                        AuthorizableContract,
                                        CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword, SoftDeletes;

    protected $table = 'users';

    protected $hidden = [
        'remember_token',
        'password',
    ];
}
