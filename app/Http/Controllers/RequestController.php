<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RequestController extends Controller
{
    public function showRequestsInfo(){
      $mandante = session('username');
      $mytime = \Carbon\Carbon::now()->format('Y-m-d');
      $ur_mandante = DB::select('select u.USERNAME as Receptor, mu.USERNAME as Mandante,
      mi.NAME_MISION as Mision, em.NAME_EMERGENCY as Emergencia from REQUEST r
      INNER JOIN USER_ROLE ur on ur.ID_USER_ROLE = r.ID_USER_ROLE
      INNER JOIN USER_ROLE mr on mr.ID_USER_ROLE = r.USE_ID_USER_ROLE
      INNER JOIN USER u on u.ID_USER = ur.ID_USER
      INNER JOIN USER mu on mu.ID_USER = mr.ID_USER
      INNER JOIN MISION mi on mi.ID_MISION = r.ID_MISION
      INNER JOIN EMERGENCY em on em.ID_EMERGENCY = mi.ID_EMERGENCY
      where r.DATESENDED_REQUEST<? AND mi.FINALDATE_MISION>? AND mi.INITIALDATE_MISION<?
      AND mu.USERNAME = ?;',
      [$mytime, $mytime, $mytime, $mandante]);
      dd($ur_mandante);
    }
    public function showAllRequestsInfo(){

        $mytime = \Carbon\Carbon::now()->format('Y-m-d');
        $ur_mandante = DB::select('select u.USERNAME as Receptor, mu.USERNAME as Mandante,
        mi.NAME_MISION as Mision, em.NAME_EMERGENCY as Emergencia from REQUEST r
        INNER JOIN USER_ROLE ur on ur.ID_USER_ROLE = r.ID_USER_ROLE
        INNER JOIN USER_ROLE mr on mr.ID_USER_ROLE = r.USE_ID_USER_ROLE
        INNER JOIN USER u on u.ID_USER = ur.ID_USER
        INNER JOIN USER mu on mu.ID_USER = mr.ID_USER
        INNER JOIN MISION mi on mi.ID_MISION = r.ID_MISION
        INNER JOIN EMERGENCY em on em.ID_EMERGENCY = mi.ID_EMERGENCY
        where r.DATESENDED_REQUEST<? AND mi.FINALDATE_MISION>? AND mi.INITIALDATE_MISION<?;',
        [$mytime, $mytime, $mytime]);
        dd($ur_mandante);
    }
    public function showmyRequestsInfo(){
      $mandante = session('username');
      $mytime = \Carbon\Carbon::now()->format('Y-m-d');
      $ur_mandante = DB::select('select u.USERNAME as Receptor, mu.USERNAME as Mandante,
      mi.NAME_MISION as Mision, em.NAME_EMERGENCY as Emergencia from REQUEST r
      INNER JOIN USER_ROLE ur on ur.ID_USER_ROLE = r.ID_USER_ROLE
      INNER JOIN USER_ROLE mr on mr.ID_USER_ROLE = r.USE_ID_USER_ROLE
      INNER JOIN USER u on u.ID_USER = ur.ID_USER
      INNER JOIN USER mu on mu.ID_USER = mr.ID_USER
      INNER JOIN MISION mi on mi.ID_MISION = r.ID_MISION
      INNER JOIN EMERGENCY em on em.ID_EMERGENCY = mi.ID_EMERGENCY
      where r.DATESENDED_REQUEST<? AND mi.FINALDATE_MISION>? AND mi.INITIALDATE_MISION<?
      AND u.USERNAME = ?;',
      [$mytime, $mytime, $mytime, $mandante]);
      dd($ur_mandante);
    }
}
