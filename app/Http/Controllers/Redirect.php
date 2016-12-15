<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Redirect extends Controller
{
  public function register(){	
	$data=[];
	$ds=DB::select('SELECT U.`ID_USER` FROM `USER` U ORDER BY U.`ID_USER` DESC LIMIT 1 ');	
	foreach ($ds as $d) {
        	$data[0] = $d->ID_USER;
    	}
	DB::INSERT('INSERT IGNORE INTO `USER_ROLE` (`ID_USER_ROLE`, `ID_USER`, `ID_ROLE`) VALUES (NULL, '.$data[0].', 1);');
    return Auth::logout();
  }
  public function log(){
	$data=[];
	$data2=[];
	$data=DB::select('SELECT U.ID_USER,U.USERNAME,U.PASSWORD FROM USER U WHERE U.USERNAME='.$_POST["USERNAME"].' AND U.PASSWORD='.$_POST["PASSWORD"].';');
	$data2=DB::select('SELECT r.ID_ROLE, r.NAME_ROLE 
		FROM USER u
		INNER JOIN USER_ROLE ur
		ON ur.ID_USER = u.ID_USER
		INNER JOIN ROLE r
		ON r.ID_ROLE = ur.ID_ROLE
		WHERE u.USERNAME='.$_POST["USERNAME"].';');
	if(!empty($data)){
		$roles=$data2;
		if(empty($roles)){return 'ERROR';}
	  	$data1=[];
	  	$data2=[];
	  	$i=0;  	
		foreach ($roles as $rol) {
	    	$data2[0] =$rol->ID_ROLE;
	       	$data2[1] =$rol->NAME_ROLE;
	       	$data1[$i] = $data2;
	       	$i=$i+1;
	    }
	    return view('redirect',['roles'=>$data1]);
	}
	return redirect()->action('HomeController@index');
  }
  public function redir(array $roles){
  	if(empty($roles)){return 'ERROR';}
  	$data1=[];
  	$data2=[];
  	$i=0;  	
	foreach ($roles as $rol) {
    	$data2[0] =$rol->ID_ROLE;
       	$data2[1] =$rol->NAME_ROLE;
       	$data1[i] = $data2;
       	$i=$i+1;
    }
    return var_dump($data1);
	
  }

}
