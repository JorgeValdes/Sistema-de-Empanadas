<!DOCTYPE html>
<html>
<head>
	<title>Sabores Del Hogar</title>
		    <!-- Scripts -->
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

    <!--BOOTSTRAP-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<!--BOOTSTRAP-->

</head>
<body style="margin: 0; padding: 0; margin: 0 auto;">

	<div class="row">
		<div class="col-md-12 ">
						<!-- Navigation -->
		<nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color: background: background: #F2994A;  /* fallback for old browsers */
background: -webkit-linear-gradient(to top, #F2C94C, #F2994A);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to top, #F2C94C, #F2994A); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

">
		  <div class="container">
		    <a class="navbar-brand" href="/">
		          <img src="/imagenes/sdh.png" alt="">
		        </a>
		    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
		          <span class="navbar-toggler-icon"></span>
		        </button>
		    <div class="collapse navbar-collapse" id="navbarResponsive">
		      <ul class="navbar-nav ml-auto">
		        <li class="nav-item active">
		          <a class="nav-link" href="/">Inicio
		                <span class="sr-only">(current)</span>
		              </a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="/productos">Menú</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="{{ route('login') }}">Pedidos</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="/nosotros">Acerca de nosotros</a>
		        </li>
		       	<li class="nav-item">
		          <a class="nav-link" href="/contacto">Contactanos</a>
		        </li>
		                                @guest

						@if (Route::has('register'))
                             <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Registrar</a>
                                </li>
                         @endif
										@else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                                        Salir
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
						@endguest
						<li class="nav-item" >
							<a class="nav-link" href="">Siguenos</a>
							<a href="https://www.facebook.com/sabores.delhogar.18"> <ion-icon name="logo-facebook" size = "large"></ion-icon></ion-icon></a>
							<a href="https://www.instagram.com/saboresdelhogar_cl/?hl=es-la" style="color: #fc5c7d"> <ion-icon name="logo-instagram" size = "large"></ion-icon></ion-icon></a>
							<a href="" style="color: green"><ion-icon name="logo-whatsapp" size = "large"></ion-icon></a>
							
						</li>
						
					
			  </ul>
			
		    </div>
		  </div>
		</nav>

		</div>
	</div>



		 @yield('content')
		 @yield('scripts')

		 	@if(session('info'))
		<center>
			<div class="container">
				<div class="row">
					<div class="col-md-4"> </div>
					<div class="col-md-4 col-md-offset-2">
						<div class="alert alert-success">
							{{session('info')}}
						</div>
					</div>
				</div>
			</div>
		</center>
	@endif

		<footer>
		
			
						<div class="" style="background: #F2994A;  /* fallback for old browsers */
						background: -webkit-linear-gradient(to right, #F2C94C, #F2994A);  /* Chrome 10-25, Safari 5.1-6 */
						background: linear-gradient(to right, #F2C94C, #F2994A); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
						">
						<center>
							<h3 style="color:white">HORARIO</h3>
							<h5 style="color:white">Lunes a Viernes 09:00 - 18:00</h5>
							<h5 style="color:white">Sábado y Domingo 09:00 - 15:00</h5>
							<span style="color:white">Jack Rodriguez Fernández</span>
							<span style="color:white">+56981328755</span>
							<span style="color:white">Copyright 2019 Sabores del Hogar </span>
							
						</center>
						</div>
	
		
		
				</div>
			</div>
		</footer>
					
</body>
</html>