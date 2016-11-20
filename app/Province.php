<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    //
    protected $timestamp = false;
    protected $primaryKey = "ID_PROVINCE";
    protected $table = "PROVINCE";
    protected $fillable = [
      'NAME_PROVINCE'
    ];
}
