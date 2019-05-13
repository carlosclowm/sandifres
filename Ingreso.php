<!DOCTYPE html>
<html>
<head>
    <title>Sandifres Dresses | Registro</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
</head>
<body>
    <header>
        <div class="users"><h5><a href="/login.php">Ingresar</a> | <a href="/Registro.php">Registrarse</a></h5></div>
        <div class="logo">Sandifres Dresses</div>

    </header>
    <nav>
            <ul>
                <li><a class="active" href="/">Vestidos</a></li>
                <li><a href="#news">Accesorios</a></li>
                <li><a href="#contact">Informacion</a></li>
                <li><a href="#about">Galeria</a></li>
                <li><a href="#">Contactanos</a></li>
            </ul>
        </nav>
    <section>
        <div class="login">
            <form action="/login.php" method="post">
                <label>Usuario</label>
                <br>
                <input type="text" name="user">
                <br>
                <label>Contraseña</label>
                <br>
                <input type="password" name="pass">
                <br>
                <button type="submit">Ingresar</button>
                <br>
            </form>
            <a href="/Registro.php">O Registrarse</a>
        </div>
    </section>
    <footer>
        
    </footer>
</body>
</html>