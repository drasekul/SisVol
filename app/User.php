<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $timestamps = false;
    protected $table = "USER";
    protected $primaryKey = "ID_USER";
    protected $fillable = [
        'ID_COMMUNE',
        'USERNAME',
        'password',
        'EMAIL',
        'PHONE',
        'FIRSTNAME',
        'LASTNAME',
        'RUT',
        'remember_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'PASSWORD', 'remember_token',
    ];
}
