<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $timestamp = false;
    protected $primaryKey = "ID_DOCUMENT";
    protected $table = "DOCUMENT";
    protected $fillable = [
      'LINK_DOCUMENT'
    ];
}
