<?php
    session_start();
    if($_SESSION["usuario"] != ""){
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Biblioteca Juvenil</title>
        <meta charset="UTF-8">
        <meta name="description" content="Pagina de prueba para la clase de Introduccion a la Programacion en CESDE">
        <meta name="keywords" content="prueba, programacion, CESDE">
        <meta name="author" content="Jose Gomez, josedavidgomezavila@gmail.com">
        <meta name="responder a" content="josedavidgomezavila@gmail.com">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="language" content="ES">
        <meta name="revision" content="Jueves, 22 de noviembre de 2020, 12:05 AM">
        <link rel="stylesheet" type="text/css" href="css/estilo 3.0.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Texturina:wght@300&display=swap" rel="stylesheet">
    </head>
    <body class="Login">
        <header>
            <section class="contenedor">
                <h1 class="icon-libro"> Biblioteca Juvenil</h1>
                <input type="checkbox" id="menu-bar">
                <label class="icon-menu" for="menu-bar"></label>
                <nav>
                    <ul class="menu">
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="#">Libros</a>
                            <ul class="sub-menu">
                                <li><a href="aventura.php">Aventura</a></li>
                                <li><a href="historia.php">Historia</a></li>
                                <li><a href="infantil.php">Infantil</a></li>
                                <li><a href="fantasia.php">Fantasia</a></li>
                                <li><a href="erotico.php">Erotico</a></li>
                            </ul>
                        </li>
                        <li><a href="nosotros.php">Nosotros</a></li>
                        <li><a href="#"><?php echo "". $_SESSION["usuario"] ?></a>
                            <ul class="sub-menu">
                                <li><a href="VerPerfil.php">Perfil</a></li>
                                <li><a href="CerrarSesion.php">Cerrar sesion</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </section>
        </header>
        <section class="contenedor" id="Login-box">
            <img class="Logo-login" src="img/logo redondo.jpg" alt="La lectura mas cerca que nunca">
            <h2 class="Login-h2">Confirma tu numero de documento</h1>

            <form method="POST" action="VerDatos.php">
                <label for="username">Numero de documento</label>
                <input  type="text" placeholder="Ingrese su numero de documento" name="Cedula">

                <input type="submit" value="Confirmar">
            </form>
        </section>
        <footer>
        </footer>
    </body>
</html>
<?php
    } else {
        header('location:Login.html');
    }
?>