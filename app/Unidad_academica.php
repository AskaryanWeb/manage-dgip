<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidad_academica extends Model
{
    protected $primaryKey = 'clave';
    public $incrementing = false;
    public $keyType= string;
}
