@extends('admin.layouts.admin')

@section('content')

	<!--FORMULARIO PARA CREAR LA NOTICIA-->

	<div class="container">
		{!!Form::open(['route'=>['admin.productos.update', $producto->id],'method'=>'PUT', 'files'=>'true'])!!}
			<p> </p>
			<center>
				<div class="form-row">
				    <div class="form-group col-md-6">
				     	<label>Tipo de producto</label>
							{!! Form::select('tipo_producto',['empanadasH' => 'Empanadas de horno','empanadasF'=>'Empanadas fritas', 'almuerzo'=>'Almuerzo', 'otro'=>'otro'],$producto->tipo_producto, ['class'=>'form-control','placeholder'=>'Seleccione un estado','required']) !!}
				    </div>
				    <div class="form-group col-md-6">
						<label>Estado del producto</label>
						{!! Form::select('estado_producto',['publicado' => 'Publicado','noPublicado'=>'No publicado'],$producto->estado_producto, ['class'=>'form-control','placeholder'=>'Seleccione un estado','required']) !!}

				    </div>
				</div>

				<div class="form-row">
    				<div class="form-group col-md-6">
							{{Form::label('nombre_producto', 'Nombre del producto')}}
							{{Form::text('nombre_producto', $producto->nombre_producto, ['class'=>'form-control','id'=>'nombre_producto','required'])}}
    				</div>
    				<div class="form-group col-md-6">
							{{Form::label('precio_producto', 'Precio del producto')}}
							{{Form::text('precio_producto', $producto->precio_producto, ['class'=>'form-control','id'=>'_producto','required'])}}
    				</div>
  				</div>

  				<div class="form-group">
    				{{Form::label('ingredientes_producto', 'Ingredientes del producto')}}
					{{Form::textarea('ingredientes_producto', $producto->ingredientes_producto, ['class'=>'form-control','id'=>'ingredientes_producto','rows'=>4,'required'])}}
  				</div>

				<center>
					{{Form::label('files', 'Imagen del producto')}}
					<p> </p>
					{{Form::file('files', array('required' => 'true'))}}
				</center>
				<p> </p>
				<div class="form-group">
					<center>
						{{Form::submit('Actualizar',['class'=>'btn-btn btn-primary'])}}
					</center>
				</div>
			</center>
		{!! Form::close()!!}
	</div>

@endsection