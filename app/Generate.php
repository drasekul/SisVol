<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Generate extends Model
{
    //OJO NO TIENE PRIMARYKEY ESTA TABLA.
    protected $table = "GENERATE";
    protected $fillable = [
      'ID_DOCUMENT',
      'ID_REQUEST',
      'CONFIRM'
    ];
}
