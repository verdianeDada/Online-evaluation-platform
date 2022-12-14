<?php

namespace App\Http\Controllers\Auth;

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
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

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
        if ( $data['status'] == "student")
            return Validator::make($data, [
                // 'name' => 'required|string|max:255',
                'phone' => 'unique:users',
                'matricule' => 'required|unique:users',
                // 'password' => 'required|string|min:6|confirmed',
            ]);
        else
            return Validator::make($data, [
                // 'name' => 'required|string|max:255',
                'phone' => 'unique:users',
                // 'password' => 'required|string|min:6|confirmed',
            ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        // return "$data";
           
        if ( $data['sex'] === "1")
            $sex = true;
        else 
            $sex = false;
            

        if ($data['status'] == 'student')
            return User::create([
                'name' => strtolower($data['name']),
                'phone' => $data['phone'],
                'sex' => $sex,
                'option' => $data['option'],
                'matricule' => strtolower($data['matricule']),
                'year' => $data['year'],
                'password' => bcrypt($data['password']),
                ]);
        else
            return User::create([
                'name' => strtolower($data['name']),
                'phone' => $data['phone'],
                'sex' => $sex,
                'isTeacher' => true,
                'password' => bcrypt($data['password']),
            ]);
      
    }

}
