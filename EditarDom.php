<?php 
session_start();
include 'conexion.php';

$sqlDomicilio = "UPDATE users SET domicilio='".$_POST['domicilio']."' WHERE id_user='".$_SESSION['id']."';";
if($conexion->query($sqlDomicilio)){
	echo "
			<script language='JavaScript'>
			location.href = '/perfil.php'
			</script>";
}else{
	echo "Error con la consulta";
}
 ?>
