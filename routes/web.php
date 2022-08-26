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

Route::get('/register', function (){
    if(Auth::user()->admin){ 
        return view('auth/register');
    }
    return view('home');
});

//Ruta al home de administrador usando controlador home
Route::get('/adminhome', [App\Http\Controllers\HomeController::class, 'index'])->name('adminhome');

//rutas de autenticacion
Auth::routes();

//Ruta al home de usuario usando controlador home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/users', function () {
    if(Auth::user()->admin){ 
        return view('users');
    }
    return view('home');
});

Route::get('/students', [App\Http\Controllers\Auth\RegisterEstController::class, 'index'])->name('students');
Route::get('/personal', [App\Http\Controllers\Auth\RegisterPerController::class, 'index'])->name('personal');
Route::get('/visitantes', [App\Http\Controllers\Auth\RegisterVisController::class, 'index'])->name('visitantes');
Route::get('/servicios', [App\Http\Controllers\Auth\RegisterSerController::class, 'index'])->name('servicios');
Route::get('/proveedores', [App\Http\Controllers\Auth\RegisterProController::class, 'index'])->name('proveedores');
Route::get('/admins', [App\Http\Controllers\Auth\RegisterAdmController::class, 'index'])->name('admnins');
Route::get('/otros', [App\Http\Controllers\Auth\RegisterOtroController::class, 'index'])->name('otros');

Route::get('/allusers', [App\Http\Controllers\Auth\AllUsersController::class, 'index'])->name('allusers');

Route::get('editest/{id}', [App\Http\Controllers\Auth\RegisterEstController::class, 'edit'])->name('editest');
Route::post('editest/{id}', [App\Http\Controllers\Auth\RegisterEstController::class, 'update'])->name('updateest');

Route::get('editper/{id}', [App\Http\Controllers\Auth\RegisterPerController::class, 'edit'])->name('editper');
Route::post('editper/{id}', [App\Http\Controllers\Auth\RegisterPerController::class, 'update'])->name('updateper');

Route::get('editser/{id}', [App\Http\Controllers\Auth\RegisterSerController::class, 'edit'])->name('editser');
Route::post('editser/{id}', [App\Http\Controllers\Auth\RegisterSerController::class, 'update'])->name('updateser');

Route::get('editpro/{id}', [App\Http\Controllers\Auth\RegisterProController::class, 'edit'])->name('editpro');
Route::post('editpro/{id}', [App\Http\Controllers\Auth\RegisterProController::class, 'update'])->name('updatepro');

Route::get('editvis/{id}', [App\Http\Controllers\Auth\RegisterVisController::class, 'edit'])->name('editvis');
Route::post('editvis/{id}', [App\Http\Controllers\Auth\RegisterVisController::class, 'update'])->name('updatevis');

Route::get('editadm/{id}', [App\Http\Controllers\Auth\RegisterAdmController::class, 'edit'])->name('editadm');
Route::post('editadm/{id}', [App\Http\Controllers\Auth\RegisterAdmController::class, 'update'])->name('updateadm');

Route::get('editotro/{id}', [App\Http\Controllers\Auth\RegisterOtroController::class, 'edit'])->name('editotro');
Route::post('editotro/{id}', [App\Http\Controllers\Auth\RegisterOtroController::class, 'update'])->name('updateotro');

Route::get('edit/{id}', [App\Http\Controllers\Auth\AllUsersController::class, 'edit'])->name('edit');
Route::delete('/{id}/delete', [App\Http\Controllers\Auth\AllUsersController::class, 'destroy'])->name('user.destroy');



Route::get('/profile', function () {
    return view('profile');
});