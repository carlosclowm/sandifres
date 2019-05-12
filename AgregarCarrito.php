<?php 
	session_start();
	include 'conexion.php';

	$sqlproducto = "SELECT * FROM productos WHERE id_producto='".$_GET['producto']."';";
	$resultadoproducto = $conexion->query($sqlproducto);
	$rowproducto = mysqli_fetch_array($resultadoproducto, MYSQLI_ASSOC);

	$sqlagregar = "INSERT INTO carrito(nombre, foto, precio, id_usuario) 
	VALUES('".$rowproducto['nombre']."', '".$rowproducto['foto']."', '".$rowproducto['precio']."', '".$_SESSION['id']."');";
	if($conexion->query($sqlagregar)){
		echo "
		<script language='JavaScript'>
		location.href = '/'
		</script>";
	}
?>