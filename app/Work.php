<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    //Tabla intermedia entre ID_WORKFIELD e ID_USER_ROLE.
    protected $table = "WORK";
    protected $fillable = [
      'ID_WORKFIELD',
      'ID_USER_ROLE'
    ];
}
