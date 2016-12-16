<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function ActualTask(){
      $mytime = \Carbon\Carbon::now()->format('Y-m-d');
      //dd($mytime);
      $tarea = DB::select('select T.NAME_TASK, T.STARTDATE_TASK from TASK T inner join MISION M on T.ID_MISION = M.ID_MISION inner join USER_ROLE UR on M.ID_USER_ROLE = UR.ID_USER_ROLE where UR.ID_USER_ROLE =  '.session('userRol').' and T.STARTDATE_TASK <= "'.$mytime.'";');
      return view('Voluntary.actualTask')->with('tarea',$tarea);
    }

    public function TaskFromMision(){


    }

}
