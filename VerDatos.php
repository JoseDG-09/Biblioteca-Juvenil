<?php
    require('ConexionPDO.php');
    session_start();
    $Id_Pers=$_POST['Cedula'];
    if ($_SESSION['ID'] == $Id_Pers) {
        $gbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = $gbd->prepare("CALL VerAdicionalPorId (?)");
        $query->bindParam(1, $Id_Pers);

        $query->execute();

        $usuario = $query->fetch(PDO::FETCH_ASSOC);

        
            $_SESSION['Direccion'] = $usuario["Dir_Dom_Adic"];
            $_SESSION['Telefono'] = $usuario["Tel_Adic"];
            $_SESSION['Edad'] = $usuario['Edad_Adic'];
            $_SESSION['Email'] = $usuario['Email_Adic'];

            header('location:VerPerfil.php');
    }else {
        echo "Los datos no cinciden, por favor ingrese de nuevo <br><a href='Login.html'>Login</a>";
        session_destroy();
    }
        
    