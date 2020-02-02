@extends('admin.app')
@section('title', 'Usuarios')
@section('usuarios', 'active')
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>Usuarios <small>Registrar</small></h1>
	<ol class="breadcrumb">
		<li><a href="{{ route('inicio') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
		<li><span class="fa fa-users"></span> Usuarios</li> 
		<li class="active"><a href="{{ route('admin.clientes.index') }}"><i class="fa fa-list"></i> Registrar Usuario</a></li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title"><i class="fa fa-list"></i> Registrar Usuario</h3>
		</div>

		{!!Form::open(['route'=>'admin.clientes.store','files'=>'true'])!!}
		<div class="box-body">

			<div class="row">
				<div class="form-group col-md-6">
					<center>
						{{Form::label('name', 'Nombre del usuario')}}
						{{Form::text('name', null, ['class'=>'form-control','id'=>'name','required'])}}
					</center>
				</div>
				<div class="form-group col-md-6">
					<center>
						{{Form::label('email', 'Correo del usuario')}}
						{{Form::text('email', null, ['class'=>'form-control','id'=>'email','required'])}}
					</center>
				</div>
			</div>


			<div class="row">
				<div class="form-group col-md-6">
					<center>
						{{Form::label('password', 'Contraseña')}}
						{{Form::text('password', null, ['class'=>'form-control','id'=>'password','required'])}}
					</center>
				</div>
				<p> </p>
				<div class="form-group col-md-6">
					<center>
						{{Form::label('tipo','Tipo de usuario')}}
						{!! Form::select('tipo',['cliente' => 'cliente','admin'=>'admin'],null, ['class'=>'form-control','placeholder'=>'Seleccione un tipo','required']) !!}
					</center>
				</div>
			</div>
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
