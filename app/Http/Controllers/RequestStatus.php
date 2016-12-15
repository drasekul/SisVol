<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class RequestStatus extends Controller
{
    
    public function index(){
      return view('EmergencyAttendant/requestStatus');
    }

}
