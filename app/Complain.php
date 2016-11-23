<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complain extends Model
{
    protected $timestamp = false;
    protected $primaryKey = "ID_COMPLAIN";
    protected $table = "COMPLAIN";
    protected $fillable = [
      'ID_TASK',
      'ID_USER_ROLE',
      'DETAIL_COMPLAIN',
      'SEVERITY_COMPLAIN'
    ];
}
