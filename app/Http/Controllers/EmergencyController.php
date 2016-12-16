<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class EmergencyController extends Controller
{
    public function index(){
	$regiones = DB::select('select R.ID_REGION, R.NAME_REGION from REGION R ORDER BY R.NAME_REGION;');
	//$regiones = DB::select('select R.ID_EMERGENCY, R.NAME_EMERGENCY,R.DATEDECLARED_EMERGENCY,R.ID_COMMUNE from EMERGENCY R ORDER BY R.NAME_EMERGENCY;');
	$provincias = DB::select('select P.ID_PROVINCE, P.NAME_PROVINCE from PROVINCE P ORDER BY P.NAME_PROVINCE;');
	$comunas = DB::select('select C.ID_COMMUNE, C.NAME_COMMUNE from COMMUNE C ORDER BY C.NAME_COMMUNE;');
    	$result1 = [];
	     $result2 = [];
	      $result3 = [];
    	foreach ($regiones as $region) {
        	$result1[$region->ID_REGION] = $region->NAME_REGION;
		//$result1[$region->ID_EMERGENCY] = $region->NAME_EMERGENCY;
    	}
	foreach ($provincias as $provincia) {
        	$result2[$provincia->ID_PROVINCE] = $provincia->NAME_PROVINCE;
    	}
	foreach ($comunas as $comuna) {
        	$result3[$comuna->ID_COMMUNE] = $comuna->NAME_COMMUNE;
    	}
      	return view('admin/defineEmergency',['regiones'=>$result1,'provincias'=>$result2,'comunas'=>$result3]);
    	}
    public function regEmer(){
//DESEABLE:VER LAS CONDICIONES DE BORDE
	DB::INSERT('INSERT INTO EMERGENCY (`ID_EMERGENCY`, `ID_COMMUNE`, `ID_USER_ROLE`, `PLACE_EMERGENCY`, `NAME_EMERGENCY`, `DATEDECLARED_EMERGENCY`, `CONDITION_EMERGENCY`, `DESCRIPTION_EMERGENCY`, `PRIORITY_EMERGENCY`, `DATEFINISHED_EMERGENCY`) VALUES (NULL, "'.$_POST["comuna"].'", "'.session('userRol').'", "'.$_POST["geo"].'", "'.$_POST["name"].'", "'.$_POST["date"].'", "'.$_POST["estado"].'", "'.$_POST["descripcion"].'", "'.$_POST["prioridad"].'", NULL);');
	return "SUCCESS";
	}

}
