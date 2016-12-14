<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class EmergencyManagement extends Controller
{
    public function index(){
      return view('admin/emergencyManagement');
    }

}
