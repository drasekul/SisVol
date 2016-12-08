<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class CommuneController extends Controller
{
  public function index(){
    $comunas = DB::select('select C.ID_COMMUNE, C.NAME_COMMUNE from COMMUNE C inner join PROVINCE P on (C.ID_PROVINCE = P.ID_PROVINCE) inner join REGION R on (P.ID_REGION = R.ID_REGION) order by R.ID_REGION, C.NAME_COMMUNE;');
    //dd($Comunas);
    $test = [];
    foreach ($comunas as $comuna) {
        $test[$comuna->ID_COMMUNE] = $comuna->NAME_COMMUNE;
    }
    //dd($test);
    return view('test')->with('comunas', $test);
  }
}
