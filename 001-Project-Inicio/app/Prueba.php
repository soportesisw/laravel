<?php

namespace AppWGC;

use Illuminate\Database\Eloquent\Model;

class Prueba extends Model
{
    //
    protected $table='prueba';
    protected $primaryKey='idprueba';
    public $timestamps=false;

    protected $fillable=[
        'idprueba',
        'nombres',
        'apellidos'
    ];

    protected $guarded=[

    ];
}
