<?php
    session_start();
    require('ConexionPDO.php');
    $_SESSION['ID'];
    $_SESSION['Contraseña'];
    $Id_Confirm = $_POST['Id_Pers_Confirm'];
    $Contra_Confirm = $_POST['Contraseña_Confirm'];

    if ($_SESSION['ID'] == $Id_Confirm and $_SESSION['Contraseña'] == $Contra_Confirm) {
        $sql='CALL EliminarPersona (?)';

        $sentencia=$gbd->prepare($sql);
        $sentencia->bindParam(1, $Id_Confirm, PDO::PARAM_STR_CHAR);
        $sentencia->execute();

        if($sentencia){
            echo"Su cuenta ha sido eliminada, por favor vuelva a la pagina principal<br><a href='index.php'>Inicio</a>";
            session_destroy();
        }else{
            echo"Error al eliminar la cuenta";
        }
    } else {
        echo"Los datos no coiciden, por favor vuelva a ingresa e intentelo de nuevo";
        session_destroy();
        header('location:Login.html');
    }