<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class AbilityController extends Controller
{
    public function mostar(){
      $Habilidades = DB::select('select NAME_ABILITY from ABILITY;');
      return ['Habilidades' => $Habilidades];
    }
    
}
