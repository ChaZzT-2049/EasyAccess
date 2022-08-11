<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\RegisterController;

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

//ruta a la pagina de bienvenida
Route::get('/', function () {
    return view('welcome');
});

//Ruta al home de administrador usando controlador home
Route::get('/adminhome', [App\Http\Controllers\HomeController::class, 'index'])->name('adminhome');

//rutas de autenticacion
Auth::routes();

//Ruta al home de usuario usando controlador home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
