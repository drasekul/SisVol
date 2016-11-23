<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supervise extends Model
{
    //Tabla intermedia entre ID_EMERGENCY e ID_USER_ROLE.
    protected $table = "SUPERVISE";
    protected $fillable = [
      'ID_EMERGENCY',
      'ID_USER_ROLE'
    ];
}
