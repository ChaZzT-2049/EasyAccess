<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //al colocar usar una ruta con el controlador, este valida si el usuario tiene derechos de administrador
        //si es verdadero este carga la vista de admin home si no este lo manda a home
        if(Auth::user()->admin){ 
            return view('adminhome');
        }
        return view('home');
    }
}