<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    //
    protected $primaryKey = "ID_REQUEST";
    const CREATED_AT = "DATESENDED_REQUEST";
    const UPDATED_AT = "DATEREWIED_REQUEST";
    protected $fillable = [
      'ID_USER_ROLE',
      'USE_ID_USER_ROLE',
      'ID_MISION',
      'ID_WORKFIELD',
      'DATESENDED_REQUEST',
      'DATEREWIED_REQUEST'
    ];
}
