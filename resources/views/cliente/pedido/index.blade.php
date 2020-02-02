@extends('layouts.nuevoLayaout')

@section('content')

<!--COSAS PARA EL DATEPICKER-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
<!--FIN COSAS PARA EL DATEPICKER-->

<!-- Button trigger modal -->
<center>
  <p> </p>
<button type="button" class="btn btn-secondary mt-5" data-toggle="modal" data-target="#exampleModal">
  Añadir Producto <i class="fas fa-plus"></i>
</button>
</center>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Añadir un producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {!! Form::open(['route' => 'guarda.productoM' , 'method' => 'POST']) !!}
          <div class="form-group">
             <center> {!! Form::label('tipoproducto_id', 'Tipo de producto') !!}</center>
              {!! Form::select('tipoproducto_id', $tipoproductos, null, ['class' => 'form-control', 'placeholder' => 'Seleccione un tipo', 'required']) !!}
          </div>
          <div class="form-group">
              <center><label for="producto_id">Productos</label></center>
              <select class="form-control" id="productos" name="productos" required>
                  <option selected value> Seleccione un producto </option>
              </select>
          </div>
          <div class="form-group">
           <center> <label>Cantidad</label></center>
            {{Form::text('cantidad_producto', null, ['class'=>'form-control','id'=>'cantidad_producto','required'])}}
          </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        {!! Form::submit('Añadir', ['class' => 'btn btn-primary']) !!}
      </div>
       {!! Form::close() !!}
    </div>
  </div>
</div>



		<div class="container mt-5">
<!--PARTE DE AÑADIR UN PRODUCTO-->

<!--FIN DE AÑADIR UN PRODUCTO-->

			<center><h3>MI PEDIDO</h3>
			<table class="table">
	  			<thead class="thead-dark">
	    			<tr>
	      				<th scope="col">Nombre producto</th>
                <th scope="col">Tipo producto</th>
	      				<th scope="col">Cantidad</th>
	      				<th scope="col">Precio total</th>
	      				<th scope="col"> </th>
	    			</tr>
	  			</thead>
	  			<tbody>
	  				@foreach($user->pedidos()->orderBy('id','ASC')->get() as $pedido)
	    				<tr>
	      					<td>{{$pedido->nombre_producto}}</td>
                  <td>{{$pedido->tipo_producto}}</td>
	      					<td>{{$pedido->cantidad_producto}}</td>
	      					<td>${{$pedido->precio_total}}</td>
							<td><a href="{{ route('pedido.destroy', $pedido->id) }}"  onclick="return confirm('¿Seguro que deseas eliminarlo?')"  class="btn btn-outline-danger">Eliminar</a>
	    				</tr>
	    			@endforeach
	  			</tbody>
			</table></center>


      <!--SEGUNDO MODAL-->
      <center> 
          <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal1">
            ENVIAR <i class="far fa-share-square"></i>
          </button> 
      </center>
      
      <p> </p>



      <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ingrese los datos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {!! Form::open(['route' => 'guarda.pedidoF' , 'method' => 'POST']) !!}
          <div class="form-group">
             <center> {!! Form::label('id_direccion', 'Dirección de retiro') !!}</center>
              {!! Form::select('id_direccion', $direcciones, null, ['class' => 'form-control', 'placeholder' => 'Seleccione una direccion', 'required']) !!}
          </div>

          <div class="form-group">
            <label>Fecha del Pedido</label>

            {!! Form::input('text', 'fecha_reserva', null, ['class' => 'form-control datepicker', 'placeholder' => 'Seleccione un dia', 'required']) !!}
          </div>

          <div class="form-group">
            <center><label>Hora de retiro</label></center>
            {!! Form::select('id_horario', $horarios, null, ['class' => 'form-control', 'placeholder' => 'Seleccione un horario', 'required']) !!}
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>

      <!--FIN SEGUNDO MODAL-->
		</div>
	</div>
</div>

</div>
<script>
    $('.datepicker').datepicker({
        format: "dd/mm/yyyy",
        language: "es",
        autoclose: true
    });
</script>

@endsection()



@section('scripts')
	<script>

    $(document).ready(function(){
    	$("#tipoproducto_id").change(function(){
      		var tipo = $(this).val();  //cada vez que cambia el valor en el primer select, esta variable toma su valor del id del tipo de producto
          // console.log(tipo)
      		$.get('productByType/'+tipo, function(data){ //se traen en la data los productos que coinciden con el tipo
          //esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion
        		console.log(data);
          		var producto_select = '<option value="">Seleccione Producto</option>'
           			for (var i=0; i<data.length;i++)
             			 producto_select+='<option value="'+data[i].id+'">'+data[i].nombre_producto+'</option>'; //se van sumando al select los productos del tipo seleccionado
            		$("#productos").html(producto_select); //se imprimen en el segundo select
     			});

    		});
  		});
	</script>



@endsection()