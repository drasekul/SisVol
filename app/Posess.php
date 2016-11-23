<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posess extends Model
{
    //Tabla intermedia entre ID_USER_ROLE e ID_ABILITY
    //con la variable  adicional MASTERY_ABILITY.
    protected $table = "POSESS";
    protected $fillable = [
      'ID_USER_ROLE',
      'ID_ABILITY',
      'MASTERY_ABILITY'
    ];
}
