<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class User extends Eloquent implements AuthenticatableContract
{
    use Authenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    //atributos
    protected $fillable = [
        'name',
        'email',
        'tipo',
        'matricula',
        'carrera',
        'numemp',
        'areaper',
        'cargo',
        'identificacion',
        'celular',
        'motivo',
        'empresaser',
        'encargadoser',
        'areaser',
        'servicio',
        'empresapro',
        'encargadopro',
        'descripcion',
        'numadmin',
        'admin',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    // atributos encriptados
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    // colocar valor booleano al admin
    public function setAdminAttribute($value)
    {
        $this->attributes['admin'] = ($value==1);
    }
}
