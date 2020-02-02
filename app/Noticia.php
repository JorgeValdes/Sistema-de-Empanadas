<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $fillable = [
    	'id_noticia',
    	'titulo_noticia',
    	'cuerpo_noticia',
    	'resumen_noticia',
    	'files'
    ];

}
