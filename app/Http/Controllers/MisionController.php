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
  public function addMisions(){
	$comunas = DB::select('select C.ID_COMMUNE, C.NAME_COMMUNE from COMMUNE C ORDER BY C.NAME_COMMUNE;');

	$result3 = [];

	foreach ($comunas as $comuna) {
        	$result3[$comuna->ID_COMMUNE] = $comuna->NAME_COMMUNE;
    	}
	$result2 = [];
	if(!empty($_POST['comuna'])){
		$emers = DB::select('select C.ID_EMERGENCY, C.NAME_EMERGENCY from EMERGENCY C WHERE C.ID_COMMUNE="'.$_POST['comuna'].'";');
		foreach ($emers as $emer) {
        		$result2[$emer->ID_EMERGENCY] = $emer->NAME_EMERGENCY;
    		}
	}
	$result1 = [];
	$libres=DB::select('SELECT DISTINCT UR.`ID_USER_ROLE`, U.`USERNAME`
	FROM `USER_ROLE` UR INNER JOIN `USER` U 
	ON UR.`ID_USER`=U.`ID_USER`  
	LEFT JOIN `MISION` M 
	ON M.`ID_USER_ROLE`=UR.`ID_USER_ROLE`
	WHERE UR.`ID_ROLE`=2 AND M.ID_MISION IS NULL;');
	foreach ($libres as $libre) {
        	$result1[$libre->ID_USER_ROLE] = $libre->USERNAME;
    	}
    return view('admin/addMissions',['disponibles'=>$result1,'emergencia'=> $result2,'comunas'=>$result3]);
  }
  public function addMisionsDB(){
	DB::select('INSERT INTO `MISION` (`ID_MISION`, `ID_EMERGENCY`, `ID_USER_ROLE`, `ACTUALCAPACITY_MISION`, `MAXCAPACITY_MISION`, `NAME_MISION`, `INITIALDATE_MISION`, `FINALDATE_MISION`, `CONDITION_MISION`) VALUES (NULL, "'.$_POST["emergencias"].'", "'.$_POST["disponible"].'", "'.$_POST["min"].'", "'.$_POST["max"].'", "'.$_POST["name"].'", "'.$_POST["dateInit"].'", "'.$_POST["dateEnd"].'", "'.$_POST["estado"].'");');
    return 'SUCESS';
  }




}
