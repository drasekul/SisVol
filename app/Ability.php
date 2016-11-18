<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ability extends Model
{
    protected $timestamp = false;

    protected $primaryKey = "ID_ABILITY";

    protected $table = "ABILITY";

    protected $fillable = [
      'NAME_ABILIY'
    ];
}
