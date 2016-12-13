<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class taskRequests extends Controller
{
    public function index(){
      return view('Voluntary/taskRequests');
    }

}
