@extends('layouts.nuevoLayaout')

@section('content')
	<div class="container">
		@foreach($noticias as $noticia)
			<p> </p>
			<center>
				<div class="card mb-3" style="width: 1010px; height: 610px; border-color: black; background-color: #434444">
  					<img src="{{$noticia->files}}" class="card-img-top" alt="Responsive image"style = "width: 1000px; height: 600px">
  					<div class="card-body">
    					<h3 class="card-title" style="color:white">{{$noticia->titulo_noticia}}</h3>
    					<p class="card-text" style="color:white">{{$noticia->resumen_noticia}}</p>
    					<a href="{{route('verNoticia',$noticia->id)}}" class="btn btn-secondary"> Ver más</a>
  					</div>
				</div>
			</center>
		@endforeach
		<center>
			<p> {{$noticias->render()}}</p>
					
		</center>

	</div>
@endsection