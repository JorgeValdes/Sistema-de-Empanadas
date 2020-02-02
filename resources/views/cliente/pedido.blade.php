@extends('layouts.nuevoLayaout')

@section('content')

	
	@foreach($productos as $producto)
		<div class="form-check">
  			<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  			<label class="form-check-label" for="defaultCheck1">
    			{{$producto->nombre_producto}}
  			</label>
		</div>
	@endforeach
@endsection()