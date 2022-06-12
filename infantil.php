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
        <title>BJ Infantil</title>
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
                                    <li><a href="Cerrarsesion.php">Cerrar sesion</a></li>
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
            <section class="contenedor">
                <h2 class="bienvenida">INFANTIL</h2>
                <p class="pbienvenida">Por si se preguntaba si tambien hay contenido para los mas pequeños la respuesta es si, tenga la confianza de dejar que los niños del hogar exploren los contenidos que tenemos para ellos, contenidos cuidadosamente seleccionados que permitiran que los mas pequeños se diviertan y aprendan creando el habito de la lectura.
                </p>
            </section>
            <section id="blog" class="parallax1-in">
                <h3>Trabajemos la imaginacion.</h3>
                <section class="contenedor">
                    <article>
                        <img src="img/in3.jpg" alt="Un hombre gigante de hielo">
                        <h4>La vida de un gladiador</h4>
                        <p class="autor">Miguel Sabedra 35 años</p>
                    </article>
                    <article>
                        <img src="img/in2.jpg" alt="Un bosque dentro de un libro">
                        <h4>El libro de la vida</h4>
                        <p class="autor">Laura Garcia 22 años</p>
                    </article>
                </section>
            </section>
            <section id="info" class="parallax2-in">
                <h3>Conoce aqui nuestros proximos eventos.</h3>
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
?>