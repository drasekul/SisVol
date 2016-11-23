<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mision extends Model
{
   protected $dateFormat = "Y-m-d";
   const CREATED_AT = "INITIALDATE_MISION";
   const UPDATED_AT = "FINALDATE_MISION";
   protected $primaryKey = "ID_MISION";
   protected $table = "MISION";
   protected $fillable = [
     'ID_EMERGENCY',
     'ID_USER_ROLE',
     'ACTUALCAPACITY_MISION',
     'MAXCAPACITY_MISION',
     'NAME_MISION',
     'INITIALDATE_MISION',
     'FINALDATE_MISION',
     'CONDITION_MISION'
   ];
}
