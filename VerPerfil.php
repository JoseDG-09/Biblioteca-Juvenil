<?php
    session_start();
    if(isset($_SESSION["ID"])) {
?>
<!DOCTYPE html>
<html>
    <head>
        <title>BJ Perfil</title>
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
    <body class="Datos">
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
        <main>
            <form method="POST" action="ActualizarDatos.php">
                <section class="contenedor" id="Datos-box">
                    <img class="Datos-Logo" src="img/logo redondo.jpg" alt="La lectura mas cerca que nunca">
                    <h2 class="Datos-h2">Actualiza tus datos</h2>

                    <label for="Cedula">Numero de Documento</label>
                    <label for="Cedula" name="Id_Pers"><?php echo "". $_SESSION['ID'] ?></label>

                    <label for="Pri_Nom">Primer Nombre</label>
                    <input type="text" placeholder="Ingrese su primer nombre" name="Pri_Nom_Pers" required value="<?php echo "". $_SESSION['usuario'] ?>">

                    <label for="Seg_Nom">Segundo Nombre</label>
                    <input type="text" placeholder="Ingrese su segundo nombre" name="Seg_Nom_Pers" value="<?php echo "". $_SESSION['usuario2'] ?>">

                    <label for="Pri_Ape">Primer Apellido</label>
                    <input type="text" placeholder="Ingrese su primer apellido" name="Pri_Ape_Pers" required value="<?php echo "". $_SESSION['Pri_Ape_Pers'] ?>">
                </section>

                <section class="contenedor" id="Datos2-box">
                    <img class="Datos2-Logo" src="img/logo redondo.jpg" alt="La lectura mas cerca que nunca">

                        <label for="Seg_Ape">Segundo Apellido </label>
                        <input type="text" name="Seg_Ape_Pers" placeholder="Ingrese su segundo apellido" required value="<?php echo "". $_SESSION['Seg_Ape_Pers'] ?>">
        
                        <label for="Fecha">Fecha de nacimiento </label>
                        <input type="date" placeholder="YYYY-MM-DD" name="Fech_Nac_Pers" required value="<?php echo "". $_SESSION['Fech_Nac_Pers'] ?>">
        
                        <label for="password">Contraseña</label>
                        <input type="password" placeholder="Ingrese su contraseña" name="Contraseña" required value="<?php echo "". $_SESSION['Contraseña'] ?>">

                        <label for="Direccion">Direccion de domicilio</label>
                        <input type="text" placeholder="Ingrese su direccion de domicilio" name="Dir_Dom_Adic" required value="<?php echo "". $_SESSION['Direccion'] ?>">

                </section>

                <section class="contenedor" id="Datos3-box">
                    <input type="esconder" placeholder="" name="Id_Dat_Adic">
                    
                    <label for="Telefono">Numero de telefono</label>
                    <input type="text" placeholder="Ingrese su numero de telefono" name="Tel_Adic" required value="<?php echo "". $_SESSION['Telefono'] ?>">

                    <label for="Edad">Edad</label>
                    <input type="text" placeholder="Ingrese su edad en años" name="Edad_Adic" required value="<?php echo "". $_SESSION['Edad'] ?>">

                    <label for="Email">Correo electronico</label>
                    <input type="text" placeholder="Ingrese su direccion de correo" name="Email_Adic" required value="<?php echo "". $_SESSION['Email'] ?>">

                    <input type="esconder" placeholder="" name="Fk_Id_Pers">

                    <input type="submit"   value="Actualizar datos" name="Estado">
                </section>
            </form>
            <form method="POST" action="Eliminar.php">
                <section class="contenedor" id="Eliminar">
                    <input type="submit" value="Eliminar Cuenta" name="Eliminar">
                </section>
            </form>
        </main>
    </body>
</html>
<?php
    }else {
        header('location:Login.html');
    }
?>
