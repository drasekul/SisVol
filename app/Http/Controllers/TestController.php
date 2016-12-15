<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class TestController extends Controller
{
  public function index(){
    $nombre_mision = "ornare lectus justo";
    $voluntarios_db = DB::select("CALL `mision_volunteers` (?)",[$nombre_mision]);
    dd($voluntarios_db);
    return view('test')->with('comunas', $test);
  }
}
