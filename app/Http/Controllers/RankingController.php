<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class RankingController extends Controller
{
    public function showRankingUser(){
      $datos = DB::select('select U.FIRSTNAME, U.LASTNAME, count(*), avg(S.POINTS) from USER U inner join SCORE S on U.ID_USER = S.USE_ID_USER group by U.ID_USER;');
      dd($datos);
      return view('ranking')->with('puntajes', $datos);
    }
}
