<?php session_start();
include 'conexion.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sandifres Dresses | Perfil</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style type="text/css">
    	.card{
    		position: absolute;
  left: 0;
  width: 100%;
  text-align: center;
    	}
    </style>
</head>
<body>
	<header>
		<?php if (!isset($_SESSION['id'])) {
		 ?>
		<div class="users"><h5><a href="/Ingreso.php">Ingresar</a> | <a href="/Registro.php">Registrarse</a></h5></div>
	<?php }else{ ?>
		<div class="logeado"><h5>Bienvenido: <a href="/perfil.php"><?= $_SESSION['nombre'] ?></a> | <a href="/desconectar.php">Cerrar Sesion</a></h5></div>
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
                <li style="float: right;"><a href="#">Comprar $
                	<?php 
                		$sqlSumaTotal = "SELECT sum(precio) as TOTAL FROM carrito WHERE id_usuario='".$_SESSION['id']."';";
                		$resSumaTotal = $conexion->query($sqlSumaTotal);
                		while ($row = $resSumaTotal->fetch_assoc()) {
                			echo number_format($row['TOTAL']);
                		}
                	 ?>
                </a></li>
            </ul>
        </nav>
        <section>
        	<div class="card">
        		<h4>Confirmacion de Compra</h4>
        		<div class="container">
        			<form action="/RealizarCompra.php" method="post">
                        <label>Domicilio a Donde se Enviara</label>
                        <h5>
                            <?php 
                                $sqlDom = "SELECT domicilio FROM users WHERE id_user = '".$_SESSION['id']."';";
                                $resDom = $conexion->query($sqlDom);
                                while ($rowDom = $resDom->fetch_assoc()) {
                                    echo $rowDom['domicilio'];
                                }
                             ?>
                        </h5>
                        <label>Tarjeta Con la que Pagara</label>
                        <br>
                        <select name="tarjeta" required>
                            <?php 
                                $sqlCard = "SELECT * FROM cards WHERE id_user = '".$_SESSION['id']."';";
                                $resCard = $conexion->query($sqlCard);
                                while ($rowCard = $resCard->fetch_assoc()) {
                                    echo "<option>";
                                    echo "xxxx-xxxx-xxxx-".substr($rowCard['numero'], -4)." ";
                                    echo $rowCard['mes_exp']."/".$rowCard['año_exp'];
                                    echo "</option>";
                                }
                             ?>
                        </select>
                        <br>
                        <button>Comprar</button>
                    </form>
        		</div>
        	</div>
        </section>
</body>
</html>