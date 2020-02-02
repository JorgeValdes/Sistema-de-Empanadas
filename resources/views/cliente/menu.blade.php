@extends('layouts.nuevoLayaout')

@section('content')
<center>
	<div class="container-fluid">
		<!--EMPANADAS DE HORNO-->
		<h2>Empanadas de Horno</h2>
		<table class="table">
			<thead class="thead-dark">
				<tr>
			      <th scope="col">Nombre</th>
			      <th scope="col">Valor</th>
			      <th scope="col"> </th>
			    </tr>
			</thead>
			<tbody>
				@foreach($productos as $producto)
					@if($producto->tipoproducto->tipo_producto == 'EMPANADAS DE HORNO')
						<tr>
			      			<td>{{$producto->nombre_producto}}</td>
			      			<td>${{$producto->precio_producto}}</td>
			      			<td><button type="button" class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#exampleModal{{$producto->id}}"> Ver más</button></td>
			    		</tr>

			    		<!-- Modal -->
						<div class="modal fade" id="exampleModal{{$producto->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  		<div class="modal-dialog" role="document">
					    		<div class="modal-content">
					      			<div class="modal-header">
					        			<center><h5 class="modal-title" id="exampleModalLabel">{{$producto->nombre_producto}}</h5></center>
					        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          			<span aria-hidden="true">&times;</span>
					        			</button>
					      			</div>
					      			<div class="modal-body">
					        			<img src="{{$producto->files}}" style="width: 300px">
					        			<h5>{{$producto->ingredientes_producto}}</h5>
					      			</div>
					      			<div class="modal-footer">
					        			<center><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></center>
					      			</div>
					    		</div>
					  		</div>
						</div>
						<!--FIN DEL MODAL-->
					@endif
			    @endforeach
			</tbody>
		</table>
		<!-- FIN EMPANADAS DE HORNO-->
		<!--EMPANADAS FRITAS-->
		<h2>Empanadas Fritas</h2>
		<table class="table">
			<thead class="thead-dark">
				<tr>
			      <th scope="col">Nombre</th>
			      <th scope="col">Valor</th>
			      <th scope="col"> </th>
			    </tr>
			</thead>
			<tbody>
				@foreach($productos as $producto)
					@if($producto->tipoproducto->tipo_producto == 'EMPANADAS FRITAS')
						<tr>
			      			<td>{{$producto->nombre_producto}}</td>
			      			<td>${{$producto->precio_producto}}</td>
			      			<td><button type="button" class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#exampleModal{{$producto->id}}"> Ver más</button></td>
			    		</tr>

			    		<!-- Modal -->
						<div class="modal fade" id="exampleModal{{$producto->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  		<div class="modal-dialog" role="document">
					    		<div class="modal-content">
					      			<div class="modal-header">
					        			<center><h5 class="modal-title" id="exampleModalLabel">{{$producto->nombre_producto}}</h5></center>
					        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          			<span aria-hidden="true">&times;</span>
					        			</button>
					      			</div>
					      			<div class="modal-body">
					        			<img src="{{$producto->files}}" style="width: 300px">
					        			<h5>{{$producto->ingredientes_producto}}</h5>
					      			</div>
					      			<div class="modal-footer">
					        			<center><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></center>
					      			</div>
					    		</div>
					  		</div>
						</div>
						<!--FIN DEL MODAL-->
					@endif
			    @endforeach
			</tbody>
		</table>
		<!--FIN EMPANADAS FRITAS-->
		<!--ALMUERZOS-->
				<h2>Almuerzos</h2>
		<table class="table">
			<thead class="thead-dark">
				<tr>
			      <th scope="col">Nombre</th>
			      <th scope="col">Valor</th>
			      <th scope="col"> </th>
			    </tr>
			</thead>
			<tbody>
				@foreach($productos as $producto)
					@if($producto->tipoproducto->tipo_producto == 'ALMUERZOS')
						<tr>
			      			<td>{{$producto->nombre_producto}}</td>
			      			<td>${{$producto->precio_producto}}</td>
			      			<td><button type="button" class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#exampleModal{{$producto->id}}"> Ver más</button></td>
			    		</tr>

			    		<!-- Modal -->
						<div class="modal fade" id="exampleModal{{$producto->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  		<div class="modal-dialog" role="document">
					    		<div class="modal-content">
					      			<div class="modal-header">
					        			<center><h5 class="modal-title" id="exampleModalLabel">{{$producto->nombre_producto}}</h5></center>
					        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          			<span aria-hidden="true">&times;</span>
					        			</button>
					      			</div>
					      			<div class="modal-body">
					        			<img src="{{$producto->files}}" style="width: 300px">
					        			<h5>{{$producto->ingredientes_producto}}</h5>
					      			</div>
					      			<div class="modal-footer">
					        			<center><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></center>
					      			</div>
					    		</div>
					  		</div>
						</div>
						<!--FIN DEL MODAL-->
					@endif
			    @endforeach
			</tbody>
		</table>
		<!--FIN ALMUERZOS-->
		<!--OTROS-->
				<h2>Otros productos</h2>
		<table class="table">
			<thead class="thead-dark">
				<tr>
			      <th scope="col">Nombre</th>
			      <th scope="col">Valor</th>
			      <th scope="col"> </th>
			    </tr>
			</thead>
			<tbody>
				@foreach($productos as $producto)
					@if($producto->tipoproducto->tipo_producto == 'OTROS')
						<tr>
			      			<td>{{$producto->nombre_producto}}</td>
			      			<td>${{$producto->precio_producto}}</td>
			      			<td><button type="button" class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#exampleModal{{$producto->id}}"> Ver más</button></td>
			    		</tr>

			    		<!-- Modal -->
						<div class="modal fade" id="exampleModal{{$producto->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  		<div class="modal-dialog" role="document">
					    		<div class="modal-content">
					      			<div class="modal-header">
					        			<center><h5 class="modal-title" id="exampleModalLabel">{{$producto->nombre_producto}}</h5></center>
					        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          			<span aria-hidden="true">&times;</span>
					        			</button>
					      			</div>
					      			<div class="modal-body">
					        			<img src="{{$producto->files}}" style="width: 300px">
					        			<h5>{{$producto->ingredientes_producto}}</h5>
					      			</div>
					      			<div class="modal-footer">
					        			<center><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></center>
					      			</div>
					    		</div>
					  		</div>
						</div>
						<!--FIN DEL MODAL-->
					@endif
			    @endforeach
			</tbody>
		</table>
		<!--FIN OTROS-->

	</div>
</center>

@endsection()