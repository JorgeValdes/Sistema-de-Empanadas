@extends('admin.app')
@section('title', 'Usuarios')
@section('usuarios', 'active')
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>Usuarios <small>Ver</small></h1>
	<ol class="breadcrumb">
		<li><a href="{{ route('inicio') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
		<li><span class="fa fa-fw fa-user"></span> Usuarios</li> 
		<li class="active"><a href="{{ route('admin.clientes.index') }}"><i class="fa fa-list"></i> Ver Usuario</a></li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title"><i class="fa fa-list"></i> Ver Usuario</h3>
		</div>
		<div class="box-body">

			<a href="{{route('admin.clientes.create')}}" class="btn btn-sm btn-primary pull-right">Crear</a>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th width="10px"> ID</th>
						<th> Nombre usuario </th>
						<th>Correo</th>
					</tr>
				</thead>

				<tbody>
					@foreach($clientes as $cliente)
					<tr>
						<td>{{$cliente->id}}</td>
						<td>{{$cliente->name}}</td>
						<td>{{$cliente->email}}</td>
						<td width="10px">
							<a href="{{route('admin.clientes.edit', $cliente->id)}}" class="btn btn-sm btn-warning">Editar</a>
						</td>
						<td width="10px">
							{!!Form::open(['route'=>['admin.clientes.destroy', $cliente->id],'method'=>'DELETE'])!!}
							<button class="btn btn-sm btn-danger">
								Eliminar
							</button>

							{!!Form::close()!!}
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>

			<div class="col-md-3">
				<p> </p>
				{{$clientes->render()}}	
			</div>



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

@endsection