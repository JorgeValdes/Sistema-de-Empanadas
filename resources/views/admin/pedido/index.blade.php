@extends('admin.app')
@section('title', 'Pedidos')
@section('Pedidos', 'active')
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>Pedidos <small>Ver</small></h1>
	<ol class="breadcrumb">
		<li><a href="{{ route('inicio') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
		<li><span class="fa fa-fw fa-tag"></span> Pedidos</li> 
		<li class="active"><a href="{{ route('admin.pedidos.index') }}"><i class="fa fa-list"></i> Ver Pedido</a></li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title"><i class="fa fa-list"></i> Ver Pedido</h3>
		</div>
		<div class="box-body">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th width="10px"> ID</th>
						<th> Usuario </th>
						<th>  Total </th>
						<th> Fecha Pedido</th>
						<th>direccion_pedido</th>
						<th> Hora Pedido </th>
						<th> Acciones </th>
						
						<th>  </th>
					</tr>
				</thead>

				<tbody>
					@foreach($pedidos as $pedido)
					<tr>
						<td>{{ $pedido->id }}</td>
						<td> {{ $pedido->user_id}} </td>
						<td>{{ $pedido->total_pedido }}</td>
						<td> {{ $pedido->fecha_pedido}} </td>
						<td> {{ $pedido->direccion_pedido }}</td>
						<td> {{ $pedido->hora_pedido}} </td>
						
						

						<td width="10px"> 
							{!!Form::open(['route'=>['admin.pedidos.destroy', $pedido->id],'method'=>'DELETE'])!!}
							<button class="btn btn-sm btn-danger">
								Eliminar
							</button>

							{!!Form::close()!!}
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>





		</div>

		<div class="box-footer">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-4">
						<a href="{{ URL::previous() }}" class="btn btn-default btn-flat btn-block"><i class="fa fa-reply"></i> Volver</a>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>

</section>
<!-- /.content -->

@endsection
