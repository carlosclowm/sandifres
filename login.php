<?php 
	include 'conexion.php';

	session_start();
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$sql = "SELECT * FROM users WHERE user = '$user' and pass = '$pass'";
	$resultado = $conexion->query($sql);
	$row = mysqli_fetch_array($resultado, MYSQLI_ASSOC);

	if(mysqli_num_rows($resultado)){
		$_SESSION['id'] = $row['id_user'];
		$_SESSION['user'] = $row['user'];
		$_SESSION['nombre'] = $row['nombre'];
		header("Location: /index.php");
	}
	else{
		echo "Error al logearse";
	}
 ?>