<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class DefineEmergency extends Controller
{
    public function index(){
      return view('admin/defineEmergency');
    }

    
}
