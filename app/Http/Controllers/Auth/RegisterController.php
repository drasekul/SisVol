<?php

namespace App\Http\Controllers\Auth;

use DB;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/redirect';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
      //dd('hola');
        return Validator::make($data, [
            'ID_COMMUNE' => 'required',
            'USERNAME' => 'required|max:25|unique:USER',
            'PASSWORD' => 'required|min:6|confirmed',
            'FIRSTNAME' => 'required|max:50',
            'LASTNAME' => 'required|max:50',
            'RUT' => 'required|max:10',
            'EMAIL' => 'required|email|max:255',
            'PHONE' => 'required|max:15'

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'ID_COMMUNE' => $data['ID_COMMUNE'],
            'USERNAME' => $data['USERNAME'],
            'PASSWORD' => $data['PASSWORD'],
            'FIRSTNAME' => $data['FIRSTNAME'],
            'LASTNAME' => $data['LASTNAME'],
            'RUT' => $data['RUT'],
            'EMAIL' => $data['EMAIL'],
            'PHONE' => $data['PHONE']
            //'remember_token' => bcrypt($data['remember_token'])
        ]);
    }

    public function showRegistrationForm()
    {
      $comunas = DB::select('select C.ID_COMMUNE, C.NAME_COMMUNE from COMMUNE C inner join PROVINCE P on (C.ID_PROVINCE = P.ID_PROVINCE) inner join REGION R on (P.ID_REGION = R.ID_REGION) order by R.ID_REGION, C.NAME_COMMUNE;');
      //dd($Comunas);
      $test = [];
      foreach ($comunas as $comuna) {
          $test[$comuna->ID_COMMUNE] = $comuna->NAME_COMMUNE;
      }
      return view('auth.register')->with('comunas', $test);
    }
}
