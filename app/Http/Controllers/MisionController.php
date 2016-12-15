<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class MisionController extends Controller{
  public function mostrarVoluntarios(){
    //Se consultan los voluntarios asignados
    $voluntarios_db = DB::select("CALL `mision_volunteers` ()";
    dd($voluntarios_db);
  }
}
