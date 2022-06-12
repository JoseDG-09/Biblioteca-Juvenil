<?php
    session_start();
    if(isset($_SESSION["usuario"])) {
    }else {
        $_SESSION["usuario"] = "";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>BJ Nosotros</title>
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
        <link rel="shortcut icon" class="icon-libro" href="icon-libro" type="image/x-icon">
        <script src="js/estilos.js"></script>
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
                        <?php 
                            if($_SESSION["usuario"] == ""){
                        ?>
                                <li><a href="Login.html">Login</a>      
                        <?php
                            }else {
                        ?>
                                <li><a href="#"><?php echo "". $_SESSION["usuario"] ?></a>
                                <ul class="sub-menu">
                                    <li><a href="VerPerfil.php">Perfil</a></li>
                                    <li><a href="CerrarSesion.php">Cerrar sesion</a></li>
                                </ul>
                        <?php        
                            }
                        ?>
                    </ul>
                </nav>
            </section>
        </header>
        <main>
            <section id="banner" class="slider">
                <ul>
                    <li><img src="img/figuras.jpg" alt="Estatuas"></li>
                    <li><img src="img/libro y lampara.jpg" alt="Libros junto a una lampara antigua"></li>
                    <li><img src="img/libros antiguos.jpg" alt="Libros antiguos"></li>
                    <li><img src="img/pasillo.jpg" alt="Pasillo de una biblioteca"></li>
                </ul>
                <section class="contenedor">
                    <h2>Biblioteca juvenil</h2>
                    <p>¿Y como logramos llevar la lectura a los jovenes?</p>
                    <a href="#">Leer mas</a>
                </section>
            </section>
            <section class="contenedor" id="Logo">
                <img src="img/logo.jpg" alt="">
            </section>
            <section class="parallax1-nos" id="blog">
                <h3>MISION</h3>
                <section class="contenedor">
                    <section class="info-eventos">
                        <p class="nosotros">Nos enfocamos en la generación de conciencia acerca de la importancia de la lectura y la escritura con un enfoque en los jóvenes, fomentando actividades de escritura y lectura, implementando medidas y adecuando las estancias, actividades y contenidos a los gustos de los jóvenes de hoy en día teniendo en cuenta las tendencias, los gustos y las nuevas modas que surgen en géneros literarios, genero musicales y demás contenidos que podemos ofrecer.
                        </p>
                    </section>
                </section>
            </section>
            <section class="parallax2-nos" id="blog">
                <h3>VISION</h3>
                <section class="contenedor">
                    <section class="info-eventos">
                        <p class="nosotros">Tener un aforo frecuente de jóvenes entre las edades de 15 a 30 años los cuales tengan la habilidad y el deseo de leer, escribir y publicar, así mismo esperamos tener diferentes sedes donde el aforo se mantenga y de esta forma lograr cada mes publicar 2 escritos de jóvenes entre las edades de 15 y 30 años en nuestra página, y de esta forma darles exposición a estos nuevos escritores.
                        </p>
                    </section>
                </section>
            </section>
            <section class="reloj">
                <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=es&size=small&timezone=America%2FBogota">
                </iframe>
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
?>