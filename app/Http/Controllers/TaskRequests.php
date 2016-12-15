<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class TaskRequests extends Controller
{
    public function index(){
      return view('Voluntary/taskRequests');
    }

}
