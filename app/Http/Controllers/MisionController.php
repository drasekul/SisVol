<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class MisionController extends Controller{
  public function mostrarVoluntarios(){
    //Se consultan los voluntarios asignados
    //$voluntarios_db = DB::select("CALL `mision_volunteers` ()");
    dd($voluntarios_db);
  }
  public function actualInfoMission(){
    $mytime = \Carbon\Carbon::now()->format('Y-m-d');
    //dd($mytime);
    $datos = DB::select('select M.NAME_MISION, M.CONDITION_MISION from MISION M inner join USER_ROLE UR on M.ID_USER_ROLE = UR.ID_USER_ROLE where UR.ID_USER_ROLE = '.session('userRol').' and M.INITIALDATE_MISION <= "'.$mytime.'" limit 1;');
    dd($datos);
    //return view('EmergencyAttendant/actualInfoMission');
  }

  public function showTaskFromMision(){
    $datos = DB::select('select M.ID_MISION, M.NAME_MISION from MISION M;');
    $misiones = [];
    foreach ($datos as $mision) {
      $misiones[$mision->ID_MISION] = $mision->NAME_MISION;
    }
    return view('/TaskFromMision')->with('misiones', $misiones);
  }


}
