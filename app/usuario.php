<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
       public $timestamps = false;
       protected $table='usuarios';
        protected $fillable = [
        'nombre', 'apellido', 'cedula', 'edad', 'sexo',
    ];
}
