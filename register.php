<?php 
	include 'conexion.php';
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$name = $_POST['name'];
	if($conexion->query("INSERT INTO users(user, pass, nombre) VALUES('".$user."', '".$pass."', '".$name."');")){
		echo "
		<script language='JavaScript'>
		location.href = '/'
		</script>";
	}
	
 ?>

