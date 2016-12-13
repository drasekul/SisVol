<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class ActualInfoMission extends Controller
{
    public function index(){
      return view('EmergencyAttendant/actualInfoMission');
    }

}
