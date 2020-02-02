<?php

namespace App\Http\Controllers;
#controlador que contiene el crud de las noticias
use Illuminate\Http\Request;
use App\Noticia;
use Illuminate\Support\Facades\Storage;
class NoticiaController extends Controller
{
   public function index(){   
      $noticias = Noticia::orderBy('id', 'ASC')->paginate(); 
      return view('admin.noticias.index', compact('noticias'));
   }

   public function create(){

   	return view('admin.noticias.create');
   }

   public function store(Request $request){
    $noticia = Noticia::create($request->all()); 

   		//IMAGEN
    if($request->file('files')){
      $path = Storage::disk('public')->put('image',$request->file('files'));
      $noticia->fill(['files' => asset($path)])->save();

   }

   return redirect()->route('admin.noticias.index')->with('info', 'Noticia creada exitosamente');
}

public function show($id){

   $noticia = Noticia::find($id);
   return view('admin.noticias.show',compact('noticia'));
}

public function edit($id){

   $noticia = Noticia::find($id);
   return view('admin.noticias.edit',compact('noticia'));  
}

public function update(Request $request, $id){

   $noticia = Noticia::find($id);
   $noticia->fill($request->all())->save();
   if($request->file('files')){
      $path = Storage::disk('public')->put('image',$request->file('files'));
      $noticia->fill(['files' => asset($path)])->save();
   }
   return redirect()->route('admin.noticias.index')->with('info', 'Noticia actualizada con éxito');
}

public function destroy($id){
   Noticia::find($id)->delete();

   return back()->with('info', 'Eliminada correctamente');
}
}
