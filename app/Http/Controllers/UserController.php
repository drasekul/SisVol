<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    public function mostrarInfo(){
      $idUser = session('id');
      $data = DB::select('select * from USER u where u.ID_USER = ?', [$idUser]);
      $data = array_first($data);
      //dd($data);
      $info = array_add([],'username', $data->USERNAME);
      $info = array_add($info,'nombreUsuario', $data->FIRSTNAME);
      $info = array_add($info,'apellidoUsuario', $data->LASTNAME);
      $info = array_add($info,'rutUsuario', $data->RUT);
      $comuna = DB::select('select c.NAME_COMMUNE from COMMUNE c where c.ID_COMMUNE = ?', [$data->ID_COMMUNE]);
      $comuna = array_first($comuna);
      $info = array_add($info,'comunaUsuario', $comuna->NAME_COMMUNE);
      $info = array_add($info,'mailUsuario', $data->EMAIL);
      $info = array_add($info,'telefonoUsuario', $data->PHONE);
      dd($info);
      //return
    }
}
