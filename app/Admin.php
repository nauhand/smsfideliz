<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $guard='admin';


    protected $fillable = [
        'nom', 'prenoms', 'telephone', 'email', 'username', 'image', 'role', 'password',
    ];

    protected $dates = [
        'created_at', 'updated_at'
    ];
}
