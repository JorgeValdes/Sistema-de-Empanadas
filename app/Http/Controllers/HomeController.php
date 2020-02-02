<?php

namespace App\Http\Controllers;
#controlador para redireccionar vistas dependiendo del tipo de usuario
use Illuminate\Http\Request;
use App\Producto;
use App\Pedido;
use App\TipoProducto;
use App\DireccionLocal;
use App\Horario;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pedidos = Pedido::all();
        $productos = Producto::orderBy('id','ASC');
        $direcciones = DireccionLocal::orderBy('id','ASC')->pluck('direccion','id');
        $horarios = Horario::orderBy('id','ASC')->pluck('hora','id');
        $tipoproductos = TipoProducto::orderBy('id','ASC')->pluck('tipo_producto','id');
        //dd($tipoproductos);

        return view('cliente.pedido.index',compact('productos','pedidos','tipoproductos','direcciones','horarios'));
    }
}
