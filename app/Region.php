<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $timestamp = false;
    protected $primaryKey = "ID_REGION";
    protected $table = "REGION";
    protected $fillable = [
      'NAME_REGION'
    ];
}
