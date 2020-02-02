<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';
	protected $fillable = [
    	'id_producto',
    	'tipoproducto_id',
    	'nombre_producto',
    	'ingredientes_producto',
    	'precio_producto',
    	'estado_producto',
    	'files'
    ];
	//relacion un pedido tiene muchos productos y un producto pertenece a un pedido
    public function pedidos(){

    	return $this->belongsTo('App\Pedido');
    }

    public function tipoproducto(){
        return $this->belongsTo('App\TipoProducto');
    }
}
