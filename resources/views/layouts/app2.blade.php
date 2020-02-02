<!DOCTYPE html>
<html>
<head>
	<title>Sabores Del Hogar</title>
	    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</head>
<body background="imagenes/maderaa.jpg">
	<!--IMAGEN PRINCIPAL -->
	<div>
		<center>
			<img src="imagenes/sdh.png" >
		</center>
	</div>
	<p></p>
	<!--NAVBAR-->
	<center>
		<nav class="navbar navbar-expand-lg navbar-light navbar-brand" style="background-color: #ffd88b; border-radius: 50px; border: 2px solid black">
  			<a class="navbar-brand" href="#" style="">Inicio</a>
  			<a class="navbar-brand" href="#">Menú</a>
  			<a class="navbar-brand" href="#">Pedidos</a>
  			<a class="navbar-brand" href="#">Acerca de nosotros</a>
  			<a class="navbar-brand" href="#">Contacto</a>
		</nav>
		 @yield('content')
	</center>

	<p></p>
<!-- AQUI VA LA PARTE BAJA DE LA PAGINA QUE COTENDRÁ EL CONTACTO-->
<div class="row">
	<div class="col-md-4" style="background-color: #ffd88b">
		<center>
			<h3>CONTACTO</h3>
			<h5>Jack Rodriguez Fernández</h5>
			<h5>+569 81328755</h5>

		</center>
	</div>

	<div class="col-md-4" style="background-color: #ffd88b">
		<center>
			<h3>HORARIO</h3>
			<h5>Lunes a Viernes 09:00 - 18:00</h5>
			<h5>Sábado y Domingo 09:00 - 15:00</h5>
		</center>
	</div>

		<div class="col-md-4" style="background-color: #ffd88b">
		<center>
			<h3>SIGUENOS</h3>
			<a href="https://www.facebook.com/sabores.delhogar.18" style="color: black"> <ion-icon name="logo-facebook" size = "large"></ion-icon></ion-icon></a>
			<a href="https://www.instagram.com/saboresdelhogar_cl/?hl=es-la" style="color: black"> <ion-icon name="logo-instagram" size = "large"></ion-icon></ion-icon></a>
			<a href="" style="color: black"> <ion-icon name="logo-whatsapp" size = "large"></ion-icon></a>
		</center>
	</div>
</div>
</body>
</html>