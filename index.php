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
    <body>
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
                            <?php 
                                if($_SESSION["usuario"] == ""){
                            ?>
                                    <li><a href="Login.html">Login</a>      
                            <?php
                                }else {
                            ?>
                                    <li><a href="#"><?php echo "". $_SESSION["usuario"] ?></a>
                                    <ul class="sub-menu">
                                        <li><a href="ConfirmarIdentidad.php">Perfil</a></li>
                                        <li><a href="CerrarSesion.php">Cerrar sesion</a></li>
                                    </ul>
                            <?php        
                                }
                            ?>
                        </li>
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
            <section class="contenedor" id="Perritos">
                <h2 class="bienvenida">BIENVENIDOS A BIBLIOTECA JUVENIL</h2>
                <p class="pbienvenida">Bienvenido joven lector, esta biblioteca está hecha para personas como usted que se siente lejos de la lectura y que cree que el habito de leer no es para usted, pues les tenemos una gran noticia a esas personas y es que aquí encontrara todo tipo de libros interesantes para la generación del futuro, siéntase libre de explorar los diversos contenidos que tenemos para ofrecerle, e incluso si tiene la inspiración para escribir, envíenos sus historias y tal vez sea uno de los 2 autores jóvenes que publicamos cada mes.
                <br>
                Esperamos que esto solo sea el comienzo de una gran aventura lectora.
                </p>
            </section>
            <section id="blog" class="parallax-1">
                <h3>Escritos de los ultimos dos autores jovenes que publicamos este mes.</h3>
                <section class="contenedor">
                    <article>
                        <img src="img/paraiso.jpg" alt="Cabaña junto a un lago">
                        <h4>Un paraiso escondido</h4>
                        <p class="autor">Juan Cortez 21 años</p>
                    </article>
                    <article>
                        <img src="img/in2.jpg" alt="Un bosque dentro de un libro">
                        <h4>El libro de la vida</h4>
                        <p class="autor">Laura Garcia 22 años</p>
                    </article>
                </section>
            </section>
            <section id="info" class="parallax-2">
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