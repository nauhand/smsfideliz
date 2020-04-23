<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Subuser extends Authenticatable
{
    use Notifiable;

    protected $guard='subuser';

    protected $fillable = [
        'nom', 'prenoms', 'telephone', 'email', 'pays', 'entreprise', 'username', 'image', 'role', 'password',
    ];

    protected $dates = [
        'created_at', 'updated_at'
    ];
}
