@extends('admin.layouts.admin')

@section('content')
	<div class="container">
		<p> </p>
		<center><h1>LISTA DE PEDIDOS</h1></center>
		<p> </p>
		<div class="panel panel-body">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th width="10px"> ID</th>
						<th>Nombre usuario </th>
						<th>Direccion</th>
						<th>Fecha entrega</th>
						<th>Hora entrega</th>
						<th>Precio total</th>

						
					</tr>
				</thead>

				<tbody>
					@foreach($pedidosfinales as $pedidosfinal)
						<tr>
							<td>{{$pedidosfinal->id}}</td>
							<td>{{$pedidosfinal->user->name}}</td>
							<td>{{$pedidosfinal->direccion_pedido}}</td>
							<td>{{$pedidosfinal->fecha_pedido}}</td>
							<td>{{$pedidosfinal->hora_pedido}}</td>
							<td>{{$pedidosfinal->total_pedido}}</td>
							<td>
								<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#exampleModal{{$pedidosfinal->id}}">
	 								VER
								</button>
							</td>
							<td width="10px"> 
								{!!Form::open(['route'=>['pedidos.destroy', $pedidosfinal->id],'method'=>'DELETE'])!!}
									<button class="btn btn-sm btn-danger">
										ELIMINAR
									</button>

								{!!Form::close()!!}
							</td>
						</tr>
									    		<!-- Modal -->
						<div class="modal fade" id="exampleModal{{$pedidosfinal->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  		<div class="modal-dialog" role="document">
					    		<div class="modal-content">
					      			<div class="modal-header">
					        			<center><h5 class="modal-title" id="exampleModalLabel">PEDIDO</h5></center>
					        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          			<span aria-hidden="true">&times;</span>
					        			</button>
					      			</div>
					      			<div class="modal-body">
					      				<h3>Cliente:</h3>
					      				<h5>{{$pedidosfinal->user->name}}</h5>
					      				<h3>Descripción:</h3>
					        			<h5>{{$pedidosfinal->pedido}}</h5>
					      			</div>
					      			<div class="modal-footer">
					        			<center><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></center>
					      			</div>
					    		</div>
					  		</div>
						</div>
						<!--FIN DEL MODAL-->
					@endforeach
				</tbody>
			</table>
			
		</div>
	</div>
@endsection