<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class RegisterSerController extends Controller
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
     * 
     */
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

     //validador
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:60'],
            'email' => ['required', 'string', 'email', 'max:60', 'unique:users'],
            'tipo' => ['required', 'string'],
            'empresaser' => ['string'],
            'encargadoser' => ['string'],
            'areaser' => ['string'],
            'servicio' => ['string'],
            'admin' => ['boolean'],
            'password' => ['required', 'string', 'min:8', 'max:20', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */

    //crear usuario en la base de datos
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'tipo' => $data['tipo'],
            'empresaser' => $data['empresaser'],
            'encargadoser' => $data['encargadoser'],
            'areaser' => $data['areaser'],
            'servicio' => $data['servicio'],
            'admin' => $data['admin'],
            'password' => Hash::make($data['password']),
        ]);

        \Session::flash('message', 'store');
    }
}