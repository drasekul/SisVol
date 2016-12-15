<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class ComplainsController extends Controller
{
  public function mostrar(){
      $texto_ingresado=$_POST["texto"];
      $reclamos_db = DB::select("CALL `complains_from_mision` ('?')",[$texto_ingresado]);
      //Contiene la totalidad de los reclamos
      $reclamos_fixed = collect();
      foreach ($reclamos_db as $reclamo_raw) {
        //Se crean unidades independientes con los datos últiles del reclamo.
        //Se necesitan los datos ID del Reclamo, Nombre de la tarea donde fue generado
        //Usuario que lo generó, detalle y complejidad.
        $reclamo = [];
        //Se inserta el id de reclamo
        $reclamo = array_add($reclamo, 'id_reclamo', $reclamo_raw->ID_COMPLAIN);
        //Se consulta el nombre de la tarea
        $task_name = array_first(array_first(DB::select('select T.NAME_TASK from TASK T where T.ID_TASK = ?', [$reclamo_raw->ID_TASK])));
        //Se inserta el nombre de la tarea
        $reclamo = array_add($reclamo, 'nombre_tarea', $task_name);
        //Se extrae el nombre de usuario que generó el reclamo
        $username = array_first(array_first(DB::select('select U.USERNAME from USER_ROLE UR inner join USER U on (UR.ID_USER = U.ID_USER) WHERE UR.ID_USER_ROLE = ?', [$reclamo_raw->ID_USER_ROLE])));
        //Se inserta el nombre de Usuario
        $reclamo = array_add($reclamo, 'usuario', $username);
        //Se extrae el detalle
        $detalle = $reclamo_raw->DETAIL_COMPLAIN;
        //Se inserta el detalle
        $reclamo = array_add($reclamo, 'detalle_reclamo', $detalle);
        //Gravedad. Por ahora será numérico
        $gravedad = $reclamo_raw->SEVERITY_COMPLAIN;
        //Se inserta la gravedad
        $reclamo = array_add($reclamo, 'gravedad', $gravedad);
        //Ya terminado, se añade al arreglo que tiene todos los reclamos
        $reclamos_fixed->push($reclamo);
      }

      dd($reclamos_fixed);
      return view('test')->with('comunas', $test);
    }
  }
