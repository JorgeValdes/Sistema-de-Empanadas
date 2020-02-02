@extends('admin.app')
@section('title', 'Productos')
@section('productos', 'active')
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>Productos <small>Registrar</small></h1>
	<ol class="breadcrumb">
		<li><a href="{{ route('inicio') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
		<li><span class="fa fa-users"></span> Productos</li> 
		<li class="active"><a href="{{ route('admin.productos.index') }}"><i class="fa fa-list"></i> Registrar Producto</a></li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title"><i class="fa fa-list"></i> Registrar Producto</h3>
				
			</div>
			{!!Form::open(['route'=>'admin.productos.store','files'=>'true'])!!}
			<div class="box-body">
				<center>
					<div class="row">
						<div class="form-group col-md-6">
							{!! Form::label('tipoproducto_id','Tipo') !!}
							{!! Form::select('tipoproducto_id', $tipoproductos, null, ['class' => 'form-control', 	'placeholder' => 'Seleccione un tipo', 'required']) !!}

						</div>
						<div class="form-group col-md-6">
							<label>Estado del producto</label>
							{!! Form::select('estado_producto',['publicado' => 'Publicado','noPublicado'=>'No publicado'],null, ['class'=>'form-control','placeholder'=>'Seleccione un estado','required']) !!}

						</div>
					</div>

					<div class="row">
						<div class="form-group col-md-6">
							{{Form::label('nombre_producto', 'Nombre del producto')}}
							{{Form::text('nombre_producto', null, ['class'=>'form-control','id'=>'nombre_producto','required'])}}
						</div>
						<div class="form-group col-md-6">
							{{Form::label('precio_producto', 'Precio del producto')}}
							{{Form::text('precio_producto', null, ['class'=>'form-control','id'=>'_producto','required'])}}
						</div>
					</div>

					<div class="form-group">
						{{Form::label('ingredientes_producto', 'Ingredientes del producto')}}
						{{Form::textarea('ingredientes_producto', null, ['class'=>'form-control','id'=>'ingredientes_producto','rows'=>4,'required'])}}
					</div>

					<center>
						{{Form::label('files', 'Imagen del producto')}}
						<p> </p>
						{{Form::file('files',array('required' => 'true'))}}
					</center>
				</center>
			</div>

			<div class="box-footer">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-4">
							<a href="{{ URL::previous() }}" class="btn btn-default btn-flat btn-block"><i class="fa fa-reply"></i> Volver</a>
						</div>
						<div class="col-sm-4 pull-right">
							<button type="submit" class="btn btn-flat btn-primary btn-block">Registrar</button>
						</div>
					</div>
				</div>
			</div>
			{!! Form::close()!!}
		</div>
</section>

@endsection

@section('script')
<script>
	$('form').submit(function(event) {
		$(this).find('button').prop('disabled', true);
	});
</script>
@endsection