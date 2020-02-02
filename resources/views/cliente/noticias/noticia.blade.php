@extends('layouts.app2')

@section('content')
	<div class="container">
		<div class="col-md-7">
			<p> </p>
			<div class="card" style="border-color: black; background-color: #ffd88b ">
				<p> </p>
				<img src="{{$noticia->files}}" class="card-img-top" style="width: 600px; height: 400px">
				<div class="card-body" style="background-color: #ffd88b">
					<h5 class="card-title">{{$noticia->titulo_noticia}}</h5>
					<p class="card-text">{{$noticia->resumen_noticia}}</p>
					<p class="card-text">{{$noticia->cuerpo_noticia}}</p>
					<a href="/">Volver</a>
				</div>
			</div>
		</div>
	</div>
@endsection()