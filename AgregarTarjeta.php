<?php session_start();
include 'conexion.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sandifres Dresses | Perfil</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style type="text/css">
    	.card{
    		position: absolute;
  left: 0;
  width: 100%;
  text-align: center;
    	}
    </style>
</head>
<body>
	<header>
		<?php if (!isset($_SESSION['id'])) {
		 ?>
		<div class="users"><h5><a href="/Ingreso.php">Ingresar</a> | <a href="/Registro.php">Registrarse</a></h5></div>
	<?php }else{ ?>
		<div class="logeado"><h5>Bienvenido: <a href="/perfil.php"><?= $_SESSION['nombre'] ?></a> | <a href="/desconectar.php">Cerrar Sesion</a></h5></div>
	<?php } ?>
		<div class="carrito"><span><i class="material-icons">
shopping_cart
</i></span>
<a href="/carrito.php">
	<?php 
		$sqlCarrito = "SELECT * FROM carrito WHERE id_usuario='".$_SESSION['id']."';";
		$resCarrito = $conexion->query($sqlCarrito);
		echo "Carrito (".$resCarrito->num_rows.")";
	 ?>
</a></div>
		<div class="logo">Sandifres Dresses</div>

	</header>
	<nav>
            <ul>
                <li><a class="active" href="/">Vestidos</a></li>
                <li><a href="#news">Accesorios</a></li>
                <li><a href="#contact">Informacion</a></li>
                <li><a href="#about">Galeria</a></li>
                <li><a href="#">Contactanos</a></li>
                <li style="float: right;"><a href="#">Comprar $
                	<?php 
                		$sqlSumaTotal = "SELECT sum(precio) as TOTAL FROM carrito WHERE id_usuario='".$_SESSION['id']."';";
                		$resSumaTotal = $conexion->query($sqlSumaTotal);
                		while ($row = $resSumaTotal->fetch_assoc()) {
                			echo number_format($row['TOTAL']);
                		}
                	 ?>
                </a></li>
            </ul>
        </nav>
        <section>
        	<div class="card">
        		<h4>Nueva Tarjeta</h4>
        		<div class="container">
        			<form action="/AgregarCard.php" method="post">
        			<label>Numero de la tarjeta</label>
        			<br>
        			<input type="text" name="numero" required>
        			<br>
        			<label>Mes de Expiracion de la Tarjeta</label>
        			<br>
        			<input type="number" name="mes" required>
        			<br>
        			<label>Año de Expiracion de la Tarjeta</label>
        			<br>
        			<input type="number" name="año" required>
        			<br>
        			<label>Codigo de Seguridad</label>
        			<br>
        			<input type="text" name="cvv" required>
        			<br>
        			<button>Agregar</button>
        			</form>
        			
        		</div>
        	</div>
        </section>

</body>
</html>