<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class PersonalData extends Controller
{
    public function index(){
      return view('Voluntary/personalData');
    }

}
