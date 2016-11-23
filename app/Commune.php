<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    protected $timestamp = false;
    protected $primaryKey = "ID_COMMUNE";
    protected $table = "COMMUNE";
    protected $fillable = [
      'ID_PROVINCE'
      'NAME_COMMUNE'
    ];
}
