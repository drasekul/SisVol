<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Need extends Model
{
    // Tabla intermedia entre ID_ABILITY e ID_WORKFIELD.
    protected $table = "NEED";
    protected $fillable = [
      'ID_ABILITY',
      'ID_WORKFIELD'
    ];
}
