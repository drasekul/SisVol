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
      dd($tarea);
      return view('Voluntary.actualTask')->with('tarea',$tarea);
    }

    public function TaskFromMision(){


    }
    public function assign(){
	$misions = DB::select('select C.ID_MISION, C.NAME_MISION from MISION C where C.ID_USER_ROLE = ? ORDER BY C.NAME_MISION;',[session('UserRol')]);
	$result3 = [];
	foreach ($misions as $mision) {
        	$result3[$mision->ID_MISION] = $mision->NAME_MISION;
    	}
	return view('EmergencyAttendant.taskAssignment',['misiones'=>$result3]);
    }

  public function assignDB(){
	DB::insert('INSERT INTO `TASK` (`ID_TASK`, `ID_MISION`, `NAME_TASK`, `STARTDATE_TASK`, `ENDDATE_TASK`, `CONDITION_TASK`) VALUES (NULL, "'.$_POST["mision"].'", "'.$_POST["name"].'", "'.$_POST["dateInit"].'", "'.$_POST["dateEnd"].'", "'.$_POST["estado"].'");');
    return 'SUCESS';
  }

  public function showMyTasks(){
    $mytask=DB::select('select t.NAME_TASK as tarea, t.CONDITION_TASK as condicion FROM TASK t inner
    join REALLIZE r on (r.ID_TASK = t.ID_TASK)
    inner join USER_ROLE ur on r.ID_USER_ROLE=ur.ID_USER_ROLE where ur.ID_USER = ?', [session('id')]);
    dd($mytask);
  }
}
