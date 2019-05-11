<?php 
	$conexion = new mysqli("ui0tj7jn8pyv9lp6.cbetxkdyhwsb.us-east-1.rds.amazonaws.com", "jf7vvceknx5bpl8m", "qnaf8zl7922ow5dx", "ayb84n79a8baw4t8");

	if($conexion->connect_errno){
		echo "Fallo al conectarse a la base de datos";
	}

 ?>