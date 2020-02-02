<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Noticia;
use App\Producto;
use App\Pedido;
use App\Contacto;
use App\TipoProducto;
use App\DireccionLocal;
use App\Horario;
use App\User;
use App\PedidoFinal;
class ClienteController extends Controller
{
    public function noticias(){
    	$noticias = Noticia::orderBy('id','DESC')->paginate(2);
    	//dd($noticias);
    	return view('cliente.nuevoInicio', compact('noticias'));
    }

    public function verNoticia($id){
    	$noticia = Noticia::find($id);
    	return view('cliente.noticias.nuevaNoticia',compact('noticia'));
    }

    Public function productos(){
    	$productos = Producto::all();
    	return view('cliente.menu',compact('productos'));
    }
//--------------------SECCION DE PEDIDOS---------------------------
    Public function pedidos(){
        //$productos = Producto::orderBy('id','ASC')->pluck('nombre_producto','id');
        $pedidos = Pedido::all();
        $user = User::find(Auth::User()->id);
        $productos = Producto::orderBy('id','ASC');
        $direcciones = DireccionLocal::orderBy('id','ASC')->pluck('direccion','id');
        $horarios = Horario::orderBy('id','ASC')->pluck('hora','id');
        $tipoproductos = TipoProducto::orderBy('id','ASC')->pluck('tipo_producto','id');
        //dd($tipoproductos);

        return view('cliente.pedido.index',compact('productos','pedidos','tipoproductos','direcciones','horarios','user'));
    }


    public function filtro($id){
      //$productos = Producto::orderBy('id','ASC')->where('tipoproducto_id',$request->id)->get();
      //echo json_encode($productos);
        

   }

    public function recibeTipo(Request $request){

    }
    //FALTA AÑADIR CAMPO DE ID DE USER PARA ASÍ SOLO TENER LOS PRODUCTOS DE UN USUARIO
    Public function guardaProductosDelModal(Request $request){
        $productos = Producto::all();
        $pedidos = Pedido::all();
        //dd($request);
        $usuario = User::find(Auth::User()->id);
        //dd($usuario->id);
        foreach ($productos as $producto) {
            if($request->productos == $producto->id){
                $pedido = new Pedido();
                $pedido->producto_id = $producto->id;
                $pedido->user_id = $usuario->id;
                $pedido->nombre_producto = $producto->nombre_producto;
                $pedido->precio_producto = $producto->precio_producto;
                $pedido->cantidad_producto =$request->cantidad_producto;
                $pedido->precio_total = ($producto->precio_producto)*($request->cantidad_producto); 
                if($request->tipoproducto_id == 1){
                    $pedido->tipo_producto = 'EMPANADAS DE HORNO';
                }
                if($request->tipoproducto_id == 2){
                    $pedido->tipo_producto = 'EMPANADAS FRITAS';
                }
                if($request->tipoproducto_id == 3){
                    $pedido->tipo_producto = 'ALMUERZOS';
                }
                if($request->tipoproducto_id == 4){
                    $pedido->tipo_producto = 'OTROS';
                }
                $pedido->save();
                return redirect()->route('pedidos');
            } 
        }
    }
//esta es para cuando termine el filtro del AJAX (no es producto es pedido)
    public function guardaProducto($id){

        return Producto::where('tipoproducto_id','=',$id)->get();

    }

    public function guardaPedidoFinal(Request $request){
       // dd($request);
        $usuario = User::find(Auth::User()->id);
        foreach($usuario->pedidos as $pedido){
            $pedidoFNombre[] = $pedido->nombre_producto.'; Tipo: '.$pedido->tipo_producto.'; cantidad: '.$pedido->cantidad_producto.'; Precio: '.$pedido->precio_total;
            $pedidoFPrecio[] = $pedido->precio_total;
            //RECORRER PRECIO PARA SACAR EL TOTAL
            $longitud = count($pedidoFPrecio);
            $precio_final= 0;
            for($i=0; $i<$longitud; $i++){
                $precio_final = $precio_final + $pedidoFPrecio[$i]; 
            }
        }
        $cadena = implode(". ",$pedidoFNombre);
        $pedidof = new PedidoFinal();
        $pedidof->user_id = $usuario->id;
        $pedidof->pedido = $cadena;
        $pedidof->total_pedido = $precio_final;
        if($request->id_direccion == '1'){
            $pedidof->direccion_pedido = 'CHAPA VERDE #484, POBLACION MANZANAL';
        }
        if($request->id_direccion == '2'){
            $pedidof->direccion_pedido = 'MIGUEL RAMIREZ #1420, RANCAGUA';
        }
        if($request->id_direccion == '3'){
            $pedidof->direccion_pedido = 'CUEVAS #483, MALL PATIO';
        }

        $pedidof->fecha_pedido =date('y-m-d', strtotime($request->fecha_reserva));

        if($request->id_horario == '1'){
            $pedidof->hora_pedido = '09:00';
        }
        if($request->id_horario == '2'){
            $pedidof->hora_pedido = '10:00';
        }
        if($request->id_horario == '3'){
            $pedidof->hora_pedido = '11:00';
        }
         if($request->id_horario == '4'){
            $pedidof->hora_pedido = '12:00';
        }
        if($request->id_horario == '5'){
            $pedidof->hora_pedido = '13:00';
        }
        if($request->id_horario == '6'){
            $pedidof->hora_pedido = '14:00';
        }          
         if($request->id_horario == '7'){
            $pedidof->hora_pedido = '15:00';
        }
        if($request->id_horario == '8'){
            $pedidof->hora_pedido = '16:00';
        }
        if($request->id_horario == '9'){
            $pedidof->hora_pedido = '17:00';
        }          
         if($request->id_horario == '10'){
            $pedidof->hora_pedido = '18:00';
        }               
        $pedidof->save();
        //LIMPIA LA LISTA DE LOS PEDIDOS
        foreach($usuario->pedidos as $pedido){
            $pedido->delete();
        }
        return redirect()->route('pedidos')->with('info','PEDIDO REALIZADO CORRECTAMENTE');
    }


    public function destroyPedido($id){
        Pedido::find($id)->delete();
        return back()->with('info', 'Eliminada correctamente');
    }  

    Public function nosotros(){
        return view('cliente.nosotros');
    }

    Public function contacto(){
        return view('cliente.contacto');
    }

    public function guardaMensaje(Request $request){
        $contacto = Contacto::create($request->all()); 
        $contacto->save();

        return redirect()->route('inicio');

    }
}
