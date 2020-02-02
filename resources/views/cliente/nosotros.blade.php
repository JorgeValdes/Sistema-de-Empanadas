@extends('layouts.nuevoLayaout')
		
@section('content')

<script src="https://ajax.googleapis.com//ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
var instance = M.Carousel.init({
		fullWidth: true
	});

	// Or with jQuery

	$('.carousel.carousel-slider').carousel({
		fullWidth: true
	});
        
</script>

	<div class="carousel carousel-slider">
		<a class="carousel-item" href="#one!"><img src="https://lorempixel.com/800/400/food/1"></a>
		<a class="carousel-item" href="#two!"><img src="https://lorempixel.com/800/400/food/2"></a>
		<a class="carousel-item" href="#three!"><img src="https://lorempixel.com/800/400/food/3"></a>
		<a class="carousel-item" href="#four!"><img src="https://lorempixel.com/800/400/food/4"></a>
  	</div>
        
	<center>
	<div class="row"> 
	
		<div class="col">
			<div class="card border-secondary mb-3" style="max-width: 98rem">
  				<div class="card-header"><center><h3>MISIÓN</h3></center></div>
  				<div class="card-body text-secondary">
  					<center>
    					<p class="card-text">
    					 Mantener al cliente satisfecho entregando productos de primera calidad a precios módicos.
    					</p>
 						<p class="card-text">	
 							Entregar una cordial y alegre atención a todos los clientes.
 						</p>	
 						<p class="card-text">	
 							Dar seguridad y confianza en la calidad de nuestros productos.
 							Cumplir con los plazos de entrega para sus pedidos y/o solicitudes.
 						</p>
 					</center>
  				</div>
			</div>
		</div>
	</center>
	</div>
	<center>
	<div class="row">
		<div class="col">
			<div class="card text-white bg-secondary mb-3" style="max-width: 98rem;">
  				<center><div class="card-header"><h2>Elaboración de productos</h2></div></center>
  				<div class="card-body">
    				<p class="card-text">
    					
						Sabores del Hogar elabora productos artesanales, a la vista, con insumos y materias primas naturales de primera calidad. Para obtener nuestras empanadas combinamos distintos productos cuyas características armonicen entre si y propicien un alimento artesanal de excelente aroma, sabor y cuerpo.
    				</p>

    				<p class="card-text">
    					
						En cuanto a los rellenos vegetales, en Sabores del Hogar nos dedicamos a obtener solo productos de excelente sabor y completamente naturales. Luego las mismas son seleccionadas para la elaboración de los diferentes alimentos.
    				</p>

    				<p class="card-text">
    						
						Todos nuestros productos son elaborados cuidadosamente con ingredientes de altísima calidad, observando el proceso de amasado, armado y cocción, lo que nos permite ofrecerle el mejor gusto y el mejor sabor, sin pagar mas por el producto, y eso, nuestros clientes lo saben.
    				</p>
  				</div>
			</div>
		</div>
	</div>
	</center>

	
@endsection()
