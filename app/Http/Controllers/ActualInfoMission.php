<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class ActualInfoMission extends Controller
{
    public function index(){
      $mytime = \Carbon\Carbon::now()->format('Y-m-d');
      //dd($mytime);
      dd(DB::select('select M.NAME_MISION, M.CONDITION_MISION from MISION M inner join USER_ROLE UR on M.ID_USER_ROLE = UR.ID_USER_ROLE where UR.ID_USER_ROLE = '.session('userRol').' and M.INITIALDATE_MISION <= "'.$mytime.'" limit 1;'));

      //return view('EmergencyAttendant/actualInfoMission');
    }

}
