<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use Illuminate\Support\Facades\Storage;
use App\TipoProducto;
class ProductoController extends Controller
{
	public function index(){
   		$productos = Producto::orderBy('id', 'ASC')->paginate(); 

   		return view('admin.productos.index', compact('productos'));
	}

	public function create(){
   	$tipoproductos = TipoProducto::orderBy('id','ASC')->pluck('tipo_producto','id');
      return view('admin.productos.create',compact('tipoproductos'));
	}

	public function store(Request $request){
		//FALTA VALIDAR QUE NOMBRE NO SE REPITA 
   		$producto = Producto::create($request->all()); 
   		//IMAGEN
   		if($request->file('files')){
   			$path = Storage::disk('public')->put('image',$request->file('files'));
            $producto->fill(['files' => asset($path)])->save();
            
   		}

   		return redirect()->route('admin.productos.index')->with('info', 'Producto creado exitosamente');
   }

   public function show($id){

      $producto = Producto::find($id);
      return view('admin.productos.show',compact('producto'));
   }

      public function edit($id){

      $producto = Producto::find($id);
      return view('admin.productos.edit',compact('producto'));  
   }

   public function update(Request $request, $id){

      $producto = Producto::find($id);
      $producto->fill($request->all())->save();
      if($request->file('files')){
         $path = Storage::disk('public')->put('image',$request->file('files'));
         $producto->fill(['files' => asset($path)])->save();
      }
      return redirect()->route('admin.productos.index')->with('info', 'Producto actualizada con éxito');
   }

   public function destroy($id){
      Producto::find($id)->delete();

      return back()->with('info', 'Eliminado correctamente');
   }
}
