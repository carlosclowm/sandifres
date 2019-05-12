<?php 
	session_start();
	include 'conexion.php';

	if($conexion->query("DELETE FROM carrito WHERE id_carrito = '".$_GET['producto']."';")){
		echo "
		<script language='JavaScript'>
		location.href = '/carrito.php'
		</script>";
	}
 ?>