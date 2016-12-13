<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class VoluntaryRequestsChoice extends Controller
{
    public function index(){
      return view('EmergencyAttendant/voluntaryRequestsChoice');
    }

}
