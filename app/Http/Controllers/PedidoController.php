<?php

namespace App\Http\Controllers;
#controlador que contiene el crud de los pedidos
use Illuminate\Http\Request;
use App\Pedido;
use App\PedidoFinal;

class PedidoController extends Controller
{   
    Public function index(){
        $pedidos = PedidoFinal::orderBy('id', 'ASC')->paginate(); 
        return view('admin.pedido.index', compact('pedidos'));
    }

    public function destroy($id_pedidof){

    PedidoFinal::find($id_pedidof)->delete();

    return back()->with('info', 'Eliminada correctamente');
}
}

