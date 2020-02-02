@extends('layouts.nuevoLayaout')

@section('content')
	<div class="container-fluid">
		<p>
			
		</p>
		<center>
			<div class="card text-white bg-secondary mb-3" style="width:600px; height: 400px">
	  			<div class="card-header"><h4>Nuestra Ubicación</h4></div>
	  			<div class="card-body">
	    			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3300.7354416951966!2d-70.71908648519492!3d-34.17868108057174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x966344a827e3a223%3A0x6a6a530eecb0477d!2sChapa+Verde+484%2C+Rancagua%2C+Regi%C3%B3n+del+Libertador+Gral.+Bernardo+O%E2%80%99Higgins!5e0!3m2!1ses-419!2scl!4v1565110415656!5m2!1ses-419!2scl" width="500" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
	  			</div>
			</div>
		</center>

		<center><h3>Formulario de contacto</h3></center>
		{!!Form::open(['route'=>'guarda.mensaje','files'=>'true'])!!}

				<div class="form-row">
				    <div class="form-group col-md-6">
				    	<center>
				    		{{Form::label('nombre_cliente', 'Nombre')}}
							{{Form::text('nombre_cliente', null, ['class'=>'form-control','id'=>'nombre_cliente','placeholder'=>'Ingrese su nombre','required'])}}
						</center>
				    </div>
				    <div class="form-group col-md-6">
				    	<center>
				    		{{Form::label('telefono_cliente', 'Telefono')}}
							{{Form::text('telefono_cliente', null, ['class'=>'form-control','id'=>'telefono_cliente','placeholder'=>'+56 9 00000000','required'])}}
						</center>
				    </div>
				</div>

				<div class="form-row">
				    <div class="form-group col-md-6">
				    	<center>
				    		{{Form::label('email_cliente', 'Email')}}
							{{Form::text('email_cliente', null, ['class'=>'form-control','id'=>'email_cliente','placeholder'=>'aaaa@aaa.com','required'])}}
						</center>
				    </div>
				    <div class="form-group col-md-6">
				    	<center>
						<label>Motivo</label>
						{!! Form::select('motivo',['sugerencia' => 'sugerencia','reclamo'=>'reclamo','evento'=>'evento','otro'=>'otro'],null, ['class'=>'form-control','placeholder'=>'Seleccione un motivo','required']) !!}
						</center>
				    </div>
				</div>


					<div class="form-group">

						<center>
							{{Form::label('cuerpo_texto', 'Texto')}}
							{{Form::textarea('cuerpo_texto', null, ['class'=>'form-control','id'=>'cuerpo_texto','rows'=>4,'required'])}}
						</center>
						<p> </p>

					</div>
					<div class="form-group">
						<center>
								{{Form::submit('Guardar',['class'=>'btn-btn btn-primary'])}}
						</center>
					</div>
		{!! Form::close()!!}
	</div>
@endsection()