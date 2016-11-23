<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emergency extends Model
{
    protected $dateFormat ="Y-m-d";
    protected $primaryKey = "ID_EMERGENCY";
    const CREATED_AT = "DATEDECLARATED_EMERGENCY";
    const UPDATED_AT = "DATEFINISHED_EMERGENCY";
    protected $table = "EMERGENCY";
    protected $fillable = [
      'ID_COMMUNE',
      'ID_USER_ROLE',
      'PLACE_EMERGENCY',
      'NAME_EMERGENCY',
      'DATEDECLARATED_EMERGENCY',
      'CONDITION_EMERGENCY',
      'DESCRIPTION_EMERGENCY',
      'PRIORITY_EMERGENCY',
      'DATEFINISHED_EMERGENCY',
      ];
}
