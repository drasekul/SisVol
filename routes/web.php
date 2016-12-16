<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::Auth('/login', 'LoginController@showLogin');
Route::any('/login/redirect','Redirect@log');
Route::any('/login/index','Redirect@redir');
Route::get('/test', 'TestController@index');
Route::get('/home', 'HomeController@index');
Route::any('/redirect','Redirect@register');
Route::any('/Voluntario/index','Voluntario@index');
Route::any('/Supervisor/index','Supervisor@index');
Route::any('/Administrador/index','Administrador@index');
Route::get('/actualInfoMission','MisionController@ActualInfoMission');
Route::get('/actualTask','TaskController@ActualTask');
Route::get('/ranking','RankingController@showRankingUser');
Route::get('/addExtraVolunteers/index','AddExtraVolunteers@index');
Route::any('/addMissions/index','MisionController@addMisions');
Route::any('/addMissions/add','MisionController@addMisionsDB');
Route::any('/defineEmergency/index','EmergencyController@index');
Route::post('/defineEmergency/regEmer','EmergencyController@regEmer');
Route::get('/emergencyManagement/index','EmergencyManagement@index');
Route::get('/emergencyManagement/index','EmergencyManagement@index');
Route::get('/infoOnAbilities/index','InfoOnAbilities@index');
Route::get('/personalData/index','PersonalData@index');
Route::get('/requestStatus/index','RequestStatus@index');
Route::get('/taskAssignment/index','TaskAssignment@index');
Route::get('/taskRequests/index','TaskRequests@index');
Route::get('/taskStatus/index','TaskStatus@index');
Route::get('/voluntaryRequestsChoice/index','VoluntaryRequestsChoice@index');
