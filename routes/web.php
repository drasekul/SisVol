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
Route::get('/test', 'TestController@index');
Route::get('/home', 'HomeController@index');
Route::get('/actualInfoMission/index','ActualInfoMission@index');
Route::get('/actualTask/index','ActualTask@index');
Route::get('/addExtraVolunteers/index','AddExtraVolunteers@index');
Route::get('/addMissions/index','AddMissions@index');
Route::any('/defineEmergency/index','DefineEmergency@index');
Route::post('/defineEmergency/regEmer','DefineEmergency@regEmer');
Route::get('/emergencyManagement/index','EmergencyManagement@index');
Route::get('/emergencyManagement/index','EmergencyManagement@index');
Route::get('/infoOnAbilities/index','InfoOnAbilities@index');
Route::get('/personalData/index','PersonalData@index');
Route::get('/taskAssignment/index','TaskAssignment@index');
Route::get('/taskRequests/index','TaskRequests@index');
Route::get('/taskStatus/index','TaskStatus@index');
Route::get('/voluntaryRequestsChoice/index','VoluntaryRequestsChoice@index');

