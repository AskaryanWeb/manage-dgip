<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey = 'num_plaza';
    public $incrementing = false;
    public $keyType= string;

    protected $fillable = [
        'name', 'paterno', 'materno', 'genero', 'grado_academico', 'area', 'diciplina', 'correo', 'telefono', 'unidad_academica_clave', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
