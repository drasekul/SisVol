<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class AddExtraVolunteers extends Controller
{
    public function index(){
      return view('EmergencyAttendant/addExtraVolunteers');
    }

}
