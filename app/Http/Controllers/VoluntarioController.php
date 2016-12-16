<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VoluntarioController extends Controller
{
  public function index(){
    if(empty(session('id')))return 'ERROR';
    $data=[];
  	$ds=DB::select('SELECT UR.`ID_USER_ROLE` FROM `USER_ROLE` UR INNER JOIN `USER` U ON UR.`ID_USER`=U.`ID_USER` WHERE U.`ID_USER`='.session('id').' AND UR.`ID_ROLE`=1 ');
  	foreach ($ds as $d) {
      session(['userRol' => ''.$d->ID_USER_ROLE]);
    }
	  return view('Voluntario');
  }

}
