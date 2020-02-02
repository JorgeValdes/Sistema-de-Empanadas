<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoProducto extends Model
{
	protected $table = 'tipoproductos';
    protected $fillable = [
    	'id_tipo',
    	'tipo_producto'
    ];

    public function Productos(){
    	return $this->hasMany('App\Producto');
    }
}
