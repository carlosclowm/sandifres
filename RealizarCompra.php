<?php 
session_start();
include 'conexion.php';

	$sqlCarrito = "SELECT * FROM carrito WHERE id_usuario = '".$_SESSION['id']."';";
	$resCarrito = $conexion->query($sqlCarrito);

	if($resCarrito){
		while ($rowCarrito = $resCarrito->fetch_assoc()) {
		$sqlCompra = "INSERT INTO compras(nombre, foto, precio, id_usuario)
		VALUES('".$rowCarrito['nombre']."', '".$rowCarrito['foto']."', '".$rowCarrito['precio']."', '".$_SESSION['id']."');";
		$conexion->query($sqlCompra);

		$conexion->query("DELETE FROM carrito WHERE id_carrito = '".$rowCarrito['id_carrito']."';");
	}
	echo "
		<script language='JavaScript'>
		location.href = '/'
		</script>";
	}else{
		echo "
		<script language='JavaScript'>
		alert('Carrito Vacio');
		location.href = '/'
		</script>";
	}
	
 ?>