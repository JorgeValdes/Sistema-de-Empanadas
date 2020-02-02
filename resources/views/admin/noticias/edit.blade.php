@extends('admin.app')
@section('title', 'Noticias')
@section('noticias', 'active')
@section('content')

<section class="content-header">
	<h1>Noticias <small>Ver</small></h1>
	<ol class="breadcrumb">
		<li><a href="{{ route('inicio') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
		<li><span class="fa fa-fw fa-tag"></span> Noticias</li> 
		<li class="active"><a href="{{ route('admin.noticias.index') }}"><i class="fa fa-list"></i> Ver Noticia</a></li>
	</ol>
</section>


<section class="content">
	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title"><i class="fa fa-list"></i> Editar Noticia</h3>
		</div>
		{!!Form::open(['route'=>['admin.noticias.update', $noticia->id],'method'=>'PUT', 'files'=>'true'])!!}
		<div class="box-body">

			<div class="row">
				<div class="col-md-4"> </div>
				<div class="col-md-4">
					<div class="form-group">
						<center>
							{{Form::label('titulo_noticia', 'Título de la noticia')}}
							{{Form::text('titulo_noticia', $noticia->titulo_noticia, ['class'=>'form-control','id'=>'titulo_noticia'])}}
						</center>

						<center>
							{{Form::label('resumen_noticia', 'Resumen de la noticia')}}
							{{Form::text('resumen_noticia', $noticia->resumen_noticia, ['class'=>'form-control','id'=>'resumen_noticia'])}}
						</center>

						<center>
							{{Form::label('cuerpo_noticia', 'Cuerpo de la noticia')}}
							{{Form::textarea('cuerpo_noticia', $noticia->cuerpo_noticia, ['class'=>'form-control','id'=>'cuerpo_noticia'])}}
						</center>

						<center>
							{{Form::label('files', 'Imagen de la noticia')}}
							{{Form::file('files')}}
						</center>

					</div>
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

