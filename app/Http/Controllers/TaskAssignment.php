<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class TaskAssignment extends Controller
{
    public function index(){
      return view('EmergencyAttendant/taskAssignment');
    }

}
