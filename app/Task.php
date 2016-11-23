<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $dateFormat = "Y-m-d";
    const CREATED_AT = "STARTDATE_TASK";
    const UPDATED_AT = "ENDDATE_TASK";
    protected $primaryKey = "ID_TASK";
    protected $table = "TASK";
    protected $fillable = [
      'ID_MISION',
      'NAME_TASK',
      'STARTDATE_TASK',
      'ENDDATE_TASK',
      'CONDITION_TASK'
    ];
}
