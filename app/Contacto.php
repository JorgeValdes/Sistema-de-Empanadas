<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
        protected $fillable = [
    	'id_contacto',
    	'nombre_cliente',
    	'telefono_cliente',
    	'email_cliente',
    	'motivo',
    	'cuerpo_texto'
    ];

}
