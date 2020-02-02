<?php

namespace App;
#modelo para horarios
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
	protected $table = 'horarios';
    protected $fillable = [
    	'id_horario',
    	'hora',
    ];
}
