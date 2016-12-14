<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class TaskStatus extends Controller
{
    public function index(){
      return view('EmergencyAttendant/taskStatus');
    }

}
