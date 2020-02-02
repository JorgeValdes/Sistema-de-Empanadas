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

	<!--BOOTSTRAP-->
	
</head>
<body >

	<div class="row">
		<div class="col-md-12">
						<!-- Navigation -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
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
		      </ul>
		    </div>
		  </div>
		</nav>

		</div>
	</div>



		 @yield('content')




	<div class="row">
		<div class="col-md-4" style="background-color: #434444">
			<center>
				<h3 style="color:white">CONTACTO</h3>
				<h5 style="color:white">Jack Rodriguez Fernández</h5>
				<h5 style="color:white">+569 81328755</h5>
			</center>
		</div>

		<div class="col-md-4" style="background-color: #434444">
			<center>
				<h3 style="color:white">HORARIO</h3>
				<h5 style="color:white">Lunes a Viernes 09:00 - 18:00</h5>
				<h5 style="color:white">Sábado y Domingo 09:00 - 15:00</h5>
			</center>
		</div>

		<div class="col-md-4" style="background-color: #434444">
			<center>
				<h3 style="color:white">SIGUENOS</h3>
				<a href="https://www.facebook.com/sabores.delhogar.18" style="color: blue"> <ion-icon name="logo-facebook" size = "large"></ion-icon></ion-icon></a>
				<a href="https://www.instagram.com/saboresdelhogar_cl/?hl=es-la" style="color: white"> <ion-icon name="logo-instagram" size = "large"></ion-icon></ion-icon></a>
				<a href="" style="color: green"> <ion-icon name="logo-whatsapp" size = "large"></ion-icon></a>
			</center>
		</div>
</body>
</html>