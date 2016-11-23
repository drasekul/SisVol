<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    //
    protected $timestamp = false;
    protected $primaryKey = "ID_USER_ROLE";
    protected $table = "USER_ROLE";
    protected $fillable = [
      'ID_USER',
      'ID_ROLE'
    ];
}
