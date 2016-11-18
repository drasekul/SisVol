<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complain extends Model
{
    protected $timestamp = false;
    protected $primaryKey = "ID_COMPLAIN";
    protected $table = "COMPLAIN";
    protected $fillable = [
      'DETAIL_COMPLAIN',
      'SEVERITY_COMPLAIN'
    ];
}
