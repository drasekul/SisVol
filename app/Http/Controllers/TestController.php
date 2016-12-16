<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class TestController extends Controller
{
  public function mostrarVoluntarios(){


    dd($voluntarios);
    return view('test')->with('comunas', $test);
  }
}
