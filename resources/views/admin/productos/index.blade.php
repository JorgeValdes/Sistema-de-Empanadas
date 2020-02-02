@extends('admin.app')
@section('title', 'Productos')
@section('productos', 'active')
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>Productos <small>Ver</small></h1>
	<ol class="breadcrumb">
		<li><a href="{{ route('inicio') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
		<li><span class="fa fa-fw fa-tag"></span> Productos</li> 
		<li class="active"><a href="{{ route('admin.productos.index') }}"><i class="fa fa-list"></i> Ver Producto</a></li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-sm-12">
			<center><a href="/admin/productos/create" class="btn btn-primary"> Crear</a></center>
			<br><br>
		</div>
		
		<div class="col-md-3">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title"><i class="fa fa-list"></i> Ver Empanadas de horno</h3>
				</div>
				<div class="box-body">
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th> Nombre </th>
								<th> Ver </th>
								<th> Eliminar </th>
							</tr>
						</thead>

						<tbody>
							@foreach($productos as $producto)
							@if($producto->tipoproducto->tipo_producto == 'EMPANADAS DE HORNO')
							<tr>
								<td>{{$producto->nombre_producto}}</td>
								<td width="10px">
									<a href="{{route('admin.productos.show', $producto->id)}}" class="btn btn-sm btn-primary">Ver</a>
								</td>
								<td width="10px"> 
									{!!Form::open(['route'=>['admin.productos.destroy', $producto->id],'method'=>'DELETE'])!!}
									<button class="btn btn-sm btn-danger">
										Eliminar
									</button>

									{!!Form::close()!!}
								</td>
							</tr>
							@endif
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div class="col-md-3">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title"><i class="fa fa-list"></i> Ver Empanadas Fritas</h3>
				</div>
				<div class="box-body">
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th> Nombre </th>
								<th> Ver </th>
								<th> Eliminar </th>
							</tr>
						</thead>

						<tbody>
							@foreach($productos as $producto)
							@if($producto->tipoproducto->tipo_producto == 'EMPANADAS FRITAS')
							<tr>
								<td>{{$producto->nombre_producto}}</td>
								<td width="10px">
									<a href="{{route('admin.productos.show', $producto->id)}}" class="btn btn-sm btn-primary">Ver</a>
								</td>
								<td width="10px"> 
									{!!Form::open(['route'=>['admin.productos.destroy', $producto->id],'method'=>'DELETE'])!!}
									<button class="btn btn-sm btn-danger">
										Eliminar
									</button>

									{!!Form::close()!!}
								</td>
							</tr>
							@endif
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div class="col-md-3">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title"><i class="fa fa-list"></i> Ver Almuerzos</h3>
				</div>
				<div class="box-body">
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th> Nombre </th>
								<th> Ver </th>
								<th> Eliminar </th>
							</tr>
						</thead>

						<tbody>
							@foreach($productos as $producto)
							@if($producto->tipoproducto->tipo_producto == 'ALMUERZOS')
							<tr>
								<td>{{$producto->nombre_producto}}</td>
								<td width="10px">
									<a href="{{route('admin.productos.show', $producto->id)}}" class="btn btn-sm btn-primary">Ver</a>
								</td>
								<td width="10px"> 
									{!!Form::open(['route'=>['admin.productos.destroy', $producto->id],'method'=>'DELETE'])!!}
									<button class="btn btn-sm btn-danger">
										Eliminar
									</button>

									{!!Form::close()!!}
								</td>
							</tr>
							@endif
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div class="col-md-3">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title"><i class="fa fa-list"></i> Ver Otros</h3>
				</div>
				<div class="box-body">
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th> Nombre </th>
								<th> Ver </th>
								<th> Eliminar </th>
							</tr>
						</thead>

						<tbody>
							@foreach($productos as $producto)
							@if($producto->tipoproducto->tipo_producto == 'OTROS')
							<tr>
								<td>{{$producto->nombre_producto}}</td>
								<td width="10px">
									<a href="{{route('admin.productos.show', $producto->id)}}" class="btn btn-sm btn-primary">Ver</a>
								</td>
								<td width="10px"> 
									{!!Form::open(['route'=>['admin.productos.destroy', $producto->id],'method'=>'DELETE'])!!}
									<button class="btn btn-sm btn-danger">
										Eliminar
									</button>

									{!!Form::close()!!}
								</td>
							</tr>
							@endif
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	
</section>

</section>

@endsection
