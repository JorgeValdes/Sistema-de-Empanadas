@extends('admin.layouts.admin')

@section('content')
<center>
	<p> </p>
	<div class="card" style="max-width: 840px;">
  		<div class="row no-gutters">
    		<div class="col-md-6">
      			<img src="{{$producto->files}}" class="card-img" alt="...">
    		</div>
    		<div class="col-md-6">
      			<div class="card-body">
        			<h5 class="card-title">{{$producto->nombre_producto}}</h5>
        			<p class="card-text">Tipo: {{$producto->tipoproducto->tipo_producto}}</p>
        			<p class="card-text">Estado: {{$producto->estado_producto}}</p>
        			<p class="card-text">Precio: ${{$producto->precio_producto}}</p>
        			<p class="card-text">Ingredientes: {{$producto->ingredientes_producto}}</p>
      			</div>
    		</div>
  		</div>
	</div>
	<p> </p>
	<a href="/admin/productos" class="btn btn-primary">Volver</a>
	<a href="{{route('admin.productos.edit',$producto->id)}}" class="btn btn-warning">Editar</a>
</center>
@endsection