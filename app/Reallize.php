<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reallize extends Model
{
    //Tabla intermedia entre ID_TASK e ID_USER_ROLE.
    protected $table = "REALLIZE";
    protected $fillable = [
      'ID_TASK',
      'ID_USER_ROLE'
    ];
}
