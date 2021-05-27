<?php

namespace App;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
//use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
   protected $guard = 'admin';

    
    protected $fillable = [
        'username', 'lastname', 'email', 'address',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

}
