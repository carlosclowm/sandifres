<?php session_start();
include 'conexion.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Sandifres Dresses | Registro</title>
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
		<div class="logeado"><h5>Bienvenido: <?= $_SESSION['nombre'] ?> | <a href="/desconectar.php">Cerrar Sesion</a></h5></div>
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
            </ul>
        </nav>
    <section>
    	<?php $sql = "SELECT * FROM carrito WHERE id_usuario='".$_SESSION['id']."';";
			$Resultado = $conexion->query($sql);
			while($fila = $Resultado->fetch_assoc()){
				echo "<div class='card'>";
				echo "<img src='".$fila['foto']."' alt='Avatar' style='width:100%'>";
				echo "<div class='container'>";
				echo "<h4><b>".$fila['nombre']."</b></h4>";
				echo "<p>$".number_format($fila['precio'])."</p>";
				echo "<a href='/EliminarCarrito.php?producto=".$fila['id_carrito']."'>Eliminar</a>";
				echo "</div>";
				echo "</div>";
			}
		?>
    </section>
    <footer>
        
    </footer>
</body>
</html>