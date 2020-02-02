@extends('admin.app')
@section('title', 'Noticias')
@section('noticias', 'active')
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>Noticias <small>Ver</small></h1>
	<ol class="breadcrumb">
		<li><a href="{{ route('inicio') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
		<li><span class="fa fa-fw fa-tag"></span> Noticias</li> 
		<li class="active"><a href="{{ route('admin.noticias.index') }}"><i class="fa fa-list"></i> Ver Noticia</a></li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title"><i class="fa fa-list"></i> Ver Noticia</h3>
		</div>
		<div class="box-body">

			<a href="{{route('admin.noticias.create')}}" class="btn btn-sm btn-primary pull-right">Crear</a>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th width="10px"> ID</th>
						<th> Título </th>
						<th>  </th>
						<th> Acciones </th>
						<th>  </th>
					</tr>
				</thead>

				<tbody>
					@foreach($noticias as $noticia)
					<tr>
						<td>{{$noticia->id}}</td>
						<td>{{$noticia->titulo_noticia}}</td>
						<td width="10px">
							<a href="{{route('admin.noticias.show', $noticia->id)}}" class="btn btn-sm btn-primary">Ver</a>
						</td>
						<td width="10px">
							<a href="{{route('admin.noticias.edit', $noticia->id)}}" class="btn btn-sm btn-warning">Editar</a>
						</td>

						<td width="10px"> 
							{!!Form::open(['route'=>['admin.noticias.destroy', $noticia->id],'method'=>'DELETE'])!!}
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
