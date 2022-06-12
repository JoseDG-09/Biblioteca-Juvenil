<?php
    session_start();
    if($_SESSION["usuario"] != ""){
?>
<!DOCTYPE html>
<html>
    <head>
        <title>BJ Erotico</title>
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
        <link rel="shortcut icon" href="icon-libro" type="image/x-icon">
        <!-- <meta http-equiv="refresh" content="3"> -->
    </head>
    <body>
        <header>
            <section class="contenedor">
                <h1 class="icon-libro">Biblioteca Juvenil</h1>
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
                        <li><a href="#"><?php echo "! ". $_SESSION["usuario"]; ?></a>
                            <ul class="sub-menu">
                                <li><a href="VerPerfil.php">Perfil</a></li>
                                <li><a href="Cerrarsesion.php">Cerrar sesion</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </section>
        </header>
        <main>
            <section id="banner" class="slider">
                <ul>
                    <li><img src="img/ert1.jpg" alt="Dos personas acostadas"></li>
                    <li><img src="img/ert2.jpg" alt="Las piernas de una mujer"></li>
                    <li><img src="img/ert6.jpg" alt="Hombre de tez oscura"></li>
                    <li><img src="img/ert3.jpg" alt="El rostro de una mujer"></li>
                </ul>
                <section class="contenedor">
                    <h2>Biblioteca juvenil</h2>
                    <p>¿Porque el erotismo es un TABU en nuestra epoca?</p>
                    <a href="#">Leer mas</a>
                </section>
            </section>
            <section class="contenedor">
                <h2 class="bienvenida">EROTISMO</h2>
                <p class="pbienvenida">El erotismo es uno de los temas mas TABU de nuestra epoca, pero como ya lo expresamos en este lugar buscamos que los jovenes se sientan como en casa, es por esto que aqui el erotismo e incluso el sexo no son temas TABU, sientase libre de explorar los diferentes contenidos que tenemos para ofrecerle de esta categoria tan apasionante.
                </p>
            </section>
            <section id="blog" class="parallax1-ert">
                <h3>Conozca nuestros contenidos mas explicitos.</h3>
                <section class="contenedor">
                    <article>
                        <img src="img/ert7.jpg" alt="Una mujer de espalda">
                        <h4>Peligro deseado</h4>
                        <p class="autor">Carlos Prieto 35 años</p>
                    </article>
                    <article class="imagen">
                        <img src="img/ert9.jpg" alt="Un letrero de neon">
                        <h4>Un amor con muchas aventuras</h4>
                        <p class="autor">Andrea Gutierrez 28 años</p>
                    </article>
                </section>
            </section>
            <section id="info" class="parallax2-ert">
                <h3 class="titulo">Conoce aqui nuestros proximos eventos.</h3>
                <section class="contenedor">
                    <section class="info-eventos">
                        <img src="img/feria libro.jpg" alt="Feria del libro">
                        <h4>Feria del libro.</h4>
                        <p>Lunes, 30 de Noviembre de 2020</p>
                    </section>
                    <section class="info-eventos">
                        <img src="img/maquina escribir.jpg" alt="Maquina de escribir">
                        <h4>Campamento aprende a escribir</h4>
                        <p>Lunes, 30 de Noviembre de 2020</p>
                    </section>
                </section>
            </section>
        </main>
        <footer>
            <section class="contenedor">
                <h1 class="copy, icon-libro">Biblioteca Juvenil</h1>
                <section class="redes">
                    <a class="icon-facebook" href="https://www.facebook.com/josedavid.gomezavila.1"></a>
                    <a class="icon-twitter" href="https://twitter.com/jose_david_2005"></a>
                    <a class="icon-instagram" href="https://www.instagram.com/jose.david.gomez/"></a>
                </section>
            </section>
            <h3 class="final">&copy;Jose - Gomez - josedavidgomezavila@gmail.com</h3>
        </footer>
    </body>
</html>
<?php
    }else{
        header('location:Login.html');
    }
?>