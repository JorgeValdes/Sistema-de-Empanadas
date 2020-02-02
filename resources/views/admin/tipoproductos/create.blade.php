<div class="container">
	{!!Form::open(['route'=>'tipoproductos.store','method' => 'POST'])!!}
	<div class="form-group">
		<label>Tipo de producto</label>
		{!! Form::text('tipo_producto', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre', 'required']) !!}
	</div>
	
	<div class="form-group">
		<center>
			{{Form::submit('guardar',['class'=>'btn-btn btn-primary'])}}
		</center>
	</div>
	{!! Form::close()!!}
</div>