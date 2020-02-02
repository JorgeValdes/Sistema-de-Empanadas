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
			<h3 class="box-title"><i class="fa fa-list"></i> Ver Noticia</h3>
		</div>
		<div class="box-body">

			<center> 

				<h5 class="card-tittle">{{$noticia->titulo_noticia}}</h5>
				<img src="{{$noticia->files}}" style="width: 600px; height: 400px">
				<div class="card-text"> {{$noticia->resumen_noticia}}</div>
				<div class="card-text"> {{$noticia->cuerpo_noticia}}</div>


			</center>

		</div>

		<div class="box-footer">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-4">
						<a href="{{ URL::previous() }}" class="btn btn-default btn-flat btn-block"><i class="fa fa-reply"></i> Volver</a>
					</div>

					<div class="col-sm-4 pull-right">
							<a  href="{{route('admin.noticias.edit', $noticia->id)}}" type="button" class="btn btn-flat btn-warning btn-block">Editar</a>
						</div>
				</div>
			</div>
		</div>

	</div> 
</section>




@endsection
