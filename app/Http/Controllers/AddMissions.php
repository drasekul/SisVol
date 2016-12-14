<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class AddMissions extends Controller
{
    public function index(){
      return view('admin/addMissions');
    }

}
