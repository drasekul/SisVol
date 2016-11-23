<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    //
    protected $timestamp = false;
    protected $primaryKey = "ID_SCORE";
    protected $table = "SCORE";
    protected $fillable = [
      'ID_USER',
      'ID_EMERGENCY',
      'USE_ID_USER',
      'POINTS'
    ];
}
