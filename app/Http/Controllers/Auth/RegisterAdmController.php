<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use Auth;

class RegisterAdmController extends Controller
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
            'numadmin' => ['numeric'],
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
            'numadmin' => $data['numadmin'],
            'admin' => $data['admin'],
            'password' => Hash::make($data['password']),
        ]);

        \Session::flash('message', 'store');
    }
    public function index()
    {
        if(Auth::user()->admin){ 
            $users=User::where('tipo', 'Administrador')->get();
            return view('admins',compact('users'));
        }
        return view('home');
    }

    public function edit($id)
    {
        if(Auth::user()->admin){ 
            $user = User::find($id);
            return view('useredit',compact('user','id'));
        }
        return view('home');
    }

    public function update(Request $request, $id)
    {
        if(Auth::user()->admin){ 
            $user= User::find($id);
            $user->name = $request->get('name');
            $user->email = $request->get('email');
            $user->tipo = $request->get('tipo');  
            $user->numadmin = $request->get('numadmin'); 
            $user->admin = $request->get('admin');
            $user->save();
            return redirect()->route("adminhome")->with('message','User has been succesfully updated');
            \Session::flash('message', 'update');
        }
        return view('home');
    }
}