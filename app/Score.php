<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    //
    protected $timestamp = false;
    protected $primaryKey = "ID_SCORE";
    protected $table = "SCORE";
    protected $fillable = [];
}
