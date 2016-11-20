<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkField extends Model
{
    protected $timestamp = false;
    protected $primaryKey = "ID_WORKFIELD";
    protected $table = "WORK_FIELD";
    protected $fillable = [
      'NAME_WORKFIELD'
    ];
}
