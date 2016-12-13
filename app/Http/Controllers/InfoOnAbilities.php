<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class InfoOnAbilities extends Controller
{
    public function index(){
      return view('Voluntary/infoOnAbilities');
    }

}
