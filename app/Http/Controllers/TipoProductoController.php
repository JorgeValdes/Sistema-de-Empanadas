<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoProducto;
class TipoProductoController extends Controller
{
     public function index(){
    	$tipoproductos = TipoProducto::all();
    	
    	return view('admin.tipoproductos.index',compact('tipoproductos'));
    }

    public function create(){
    	return view('admin.tipoproductos.create');
    }

    public function store(Request $request){
    	
    	$tipoproducto = new TipoProducto();
    	$tipoproducto->tipo_producto = $request->tipo_producto;
    	$tipoproducto->save();

    	return redirect()->route('tipoproductos.index');
    }
}
