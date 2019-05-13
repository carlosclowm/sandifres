<?php 
session_start();
include 'conexion.php';

$sqlAddCard = "INSERT INTO cards(numero, mes_exp, año_exp, cvv, id_user)
VALUES('".$_POST['numero']."', '".$_POST['mes']."', '".$_POST['año']."', '".$_POST['cvv']."', '".$_SESSION['id']."');";
if($conexion->query($sqlAddCard)){
	echo "
			<script language='JavaScript'>
			location.href = '/perfil.php'
			</script>";
}else{
	echo "error";
}
 ?>

