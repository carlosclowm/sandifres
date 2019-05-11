<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sandifres Dresses</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
</head>
<body>
	<header>
		<?php if (!isset($_SESSION['id'])) {
		 ?>
		<div class="users"><h5><a href="/Ingreso.php">Ingresar</a> | <a href="/Registro.php">Registrarse</a></h5></div>
	<?php }else{ ?>
		<div class="logeado"><h5>Bienvenido: <?= $_SESSION['user'] ?> | <a href="/desconectar.php">Cerrar Sesion</a></h5></div>
	<?php } ?>
		<div class="carrito"><span><i class="material-icons">
shopping_cart
</i></span><a href="#">Carrito (0)</a></div>
		<div class="logo">Sandifres Dresses</div>

	</header>
	<nav>
			<ul>
  				<li><a class="active" href="#home">Vestidos</a></li>
  				<li><a href="#news">Accesorios</a></li>
  				<li><a href="#contact">Informacion</a></li>
  				<li><a href="#about">Galeria</a></li>
  				<li><a href="#">Contactanos</a></li>
			</ul>
		</nav>
	<section>
	</section>
	<footer>
		
	</footer>
</body>
</html>