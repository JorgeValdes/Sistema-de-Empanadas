<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DireccionLocal extends Model
{
		protected $table = 'direcciones';
        protected $fillable = [
    	'id_direccion',
    	'direccion',
    ];
}
