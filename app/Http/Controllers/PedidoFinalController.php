<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\PedidoFinal;

class PedidoFinalController extends Controller
{
    public function index(){
    	$pedidosfinales = PedidoFinal::all();
    	return view('admin.pedidos.index', compact('pedidosfinales'));
    }

    public function show($id){
   		$pedido = PedidoFinal::find($id);
    	return view('admin.pedidos.show',compact('pedido'));
    }

    public function destroy($id){
    	PedidoFinal::find($id)->delete();

      return back()->with('info', 'Eliminado correctamente');
    }
}
