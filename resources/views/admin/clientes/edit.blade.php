@extends('admin.app')
@section('title', 'Usuarios')
@section('usuarios', 'active')
@section('content')

<section class="content-header">
	<h1>Usuarios <small>Ver</small></h1>
	<ol class="breadcrumb">
		<li><a href="{{ route('inicio') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
		<li><span class="fa fa-fw fa-tag"></span> Usuarios</li> 
		<li class="active"><a href="{{ route('admin.clientes.index') }}"><i class="fa fa-list"></i> Ver Usuario</a></li>
	</ol>
</section>


<section class="content">
	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title"><i class="fa fa-list"></i> Editar Usuario</h3>
		</div>
		{!!Form::open(['route'=>['admin.clientes.update', $cliente->id],'method'=>'PUT', 'files'=>'true'])!!}
		<div class="box-body">

			<div class="row">
				    <div class="form-group col-md-6">
				    	<center>
				    		{{Form::label('name', 'Nombre del usuario')}}
							{{Form::text('name', $cliente->name, ['class'=>'form-control','id'=>'name','required'])}}
						</center>
				    </div>
				    <div class="form-group col-md-6">
				    	<center>
				    		{{Form::label('email', 'Correo del usuario')}}
							{{Form::text('email', $cliente->email, ['class'=>'form-control','id'=>'email','required'])}}
						</center>
				    </div>
				</div>


					<div class="row">
						<div class="form-group col-md-6">
							<center>
								{{Form::label('password', 'Contraseña')}}
								{{Form::text('password', $cliente->password, ['class'=>'form-control','id'=>'password','required'])}}
							</center>
						</div>
							<p> </p>
						<div class="form-group col-md-6">
							<center>
								{{Form::label('tipo','Tipo de usuario')}}
								{!! Form::select('tipo',['cliente' => 'cliente','admin'=>'admin'],$cliente->tipo, ['class'=>'form-control','placeholder'=>'Seleccione un tipo','required']) !!}
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
