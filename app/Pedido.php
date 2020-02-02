<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{

	protected $fillable = [
    	'id_pedido',
    	'tipo_producto',
    	'nombre_producto',
    	'precio_producto',
    	'cantidad_producto',
    	'precio_total'
    ];

	// relacion un pedido tiene muchos productos
    public function productos(){

   		return $this->hasMany('App\Producto');
    }

    //un pedido tiene un usuario y un usuario tiene muchos pedidos
    public function usuarios(){
        return $this->belongsTo('App\User');
    }
}
