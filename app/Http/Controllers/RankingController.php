<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class RankingController extends Controller
{
    public function showRankingUser(){
      $datos = DB::select('select U.FIRSTNAME as FIRSTNAME, U.LASTNAME as LASTNAME, T.conteo as conteo, T.promedio as prom FROM (select U.ID_USER as id, count(*) as conteo, avg(S.POINTS) as promedio from USER U inner join SCORE S on U.ID_USER = S.USE_ID_USER group by U.ID_USER) T inner join USER U on U.ID_USER = T.id ORDER BY T.promedio DESC;');
      //Ahora se tienen los datos, para lo cual se procede a crearlos con llave valor
      $rank = collect();
      foreach ($datos as $dato) {
        //Se crea el voluntario
        $voluntario = [];
        //Se añade el nombre
        $voluntario = array_add($voluntario,'nombreVoluntario',$dato->FIRSTNAME);
        //Se añade el apellido
        $voluntario = array_add($voluntario,'apellidoVoluntario',$dato->LASTNAME);
        //Se añade el promedio
        $voluntario = array_add($voluntario, 'promedioVoluntario',$dato->prom);
        //Se añade el número de emergencias en las que ha estado
        $voluntario = array_add($voluntario, 'numemergenciasVoluntario',$dato->conteo);
        //Se añade el voluntario a la lista
        $rank->push($voluntario);
      }
      dd($rank);
      return view('ranking')->with('puntajes', $rank);
    }
}
