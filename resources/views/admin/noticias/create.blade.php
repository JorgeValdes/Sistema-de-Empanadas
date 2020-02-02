@extends('admin.app')
@section('title', 'Noticias')
@section('noticias', 'active')
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>Noticias <small>Registrar</small></h1>
	<ol class="breadcrumb">
		<li><a href="{{ route('inicio') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
		<li><span class="fa fa-users"></span> Noticias</li> 
		<li class="active"><a href="{{ route('admin.noticias.index') }}"><i class="fa fa-list"></i> Registrar Noticia</a></li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title"><i class="fa fa-list"></i> Registrar Noticia</h3>
			</div>
			{!!Form::open(['route'=>'admin.noticias.store','files'=>'true'])!!}
			<div class="box-body">
					
					<div class="row">
						<div class="form-group col-md-6">
							<center>
								{{Form::label('titulo_noticia', 'Título de la noticia')}}
								{{Form::text('titulo_noticia', null, ['class'=>'form-control','id'=>'titulo_noticia','required'])}}
							</center>
						</div>
						<div class="form-group col-md-6">
							<center>
								{{Form::label('resumen_noticia', 'Resumen de la noticia')}}
								{{Form::text('resumen_noticia', null, ['class'=>'form-control','id'=>'resumen_noticia','required'])}}
							</center>
						</div>
					</div>


					<div class="form-group">

						<center>
							{{Form::label('cuerpo_noticia', 'Cuerpo de la noticia')}}
							{{Form::textarea('cuerpo_noticia', null, ['class'=>'form-control','id'=>'cuerpo_noticia','rows'=>4,'required'])}}
						</center>
						<p> </p>

						<center>
							{{Form::label('files', 'Imagen de la noticia')}}
							{{Form::file('files', array('required' => 'true'))}}
						</center>

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
