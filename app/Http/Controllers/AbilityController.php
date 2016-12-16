<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AbilityController extends Controller
{
    public function insertar(){
      //Se muestran las habilidades de este usuario
      $user = session('user');
      //$user = '1';
      $habilidades = DB::insert('insert p.MASTERY_ABILITY as mastery, a.NAME_ABILITY as name FROM POSESS p inner join USER_ROLE ur on (ur.ID_USER_ROLE = p.ID_USER_ROLE) inner join USER u on (ur.ID_USER_ROLE = u.ID_USER) inner join ABILITY a on (a.ID_ABILITY = p.ID_ABILITY) where u.USERNAME = ?;', [$user]);
      //Se deben obtener los datos desde la vista
      //$seleccion = $_POST[]; //Se considera que debe ser escrito el nombre de la habilidad a eeliminar
    }
    public function mostrar(){
      //Se muestran las habilidades de este usuario
      $user = session('user');
      //echo $user;
      //$user = 'XYeeEEuO5O7';
      $habilidades = DB::select('SELECT p.MASTERY_ABILITY as mastery, a.NAME_ABILITY as name FROM POSESS p inner join USER_ROLE ur on (ur.ID_USER_ROLE = p.ID_USER_ROLE) inner join USER u on (ur.ID_USER = u.ID_USER) inner join ABILITY a on (a.ID_ABILITY = p.ID_ABILITY) where u.USERNAME = ?;', [$user]);
      $talentos = collect();
      foreach ($habilidades as $habilidad) {
        $talento = [];
        $talento = array_add($talento, 'nombreHabilidad', $habilidad->name);
        $talento = array_add($talento, 'maestriaHabilidad', $habilidad->mastery);
        $talentos->push($talento);
      }
        dd($talentos);
    }
    public function eliminar(){

    }

}
