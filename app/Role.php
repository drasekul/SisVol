<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $timestamp = false;
    protected $primaryKey = "ID_ROLE";
    protected $table = "ROLE";
    protected $fillable = [
      'NAME_ROLE'
    ];
}
