<?php 
	session_start();
	include 'conexion.php';

	if($conexion->query("DELETE FROM cards WHERE id_card = '".$_GET['tarjeta']."';")){
		echo "
		<script language='JavaScript'>
		location.href = '/perfil.php'
		</script>";
	}
 ?>