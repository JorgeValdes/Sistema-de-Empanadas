<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidoFinal extends Model
{
    protected $table = 'pedidosfinales';
	protected $fillable = [
    	'id_pedidof',
    	'user_id',
    	'pedido',
    	'total_pedido',
    	'direccion_pedido', 
    	'fecha_pedido',
    	'hora_pedido'
	];
	
	public function usuario(){
        return $this->belongsTo('App\User');
    }
}
