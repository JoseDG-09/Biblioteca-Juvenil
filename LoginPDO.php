<?php
    if($_POST){
        session_start();
        require('ConexionPDO.php');
        $Id_Pers=$_POST['Id_Pers'];
        $Contraseña=$_POST['Contraseña'];

        $gbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //$query = $gbd->prepare("SELECT * FROM tbl_persona WHERE Id_Pers = ? AND Contraseña = ?");
        $query = $gbd->prepare("CALL Login (?,?)");

        $query->bindParam(1, $Id_Pers);
        $query->bindParam(2, $Contraseña);

        $query->execute();

        $usuario = $query->fetch(PDO::FETCH_ASSOC);

        if($usuario){
            $_SESSION['usuario'] = $usuario["Pri_Nom_Pers"];
            $_SESSION['ID'] = $usuario["Id_Pers"];
            $_SESSION['usuario2'] = $usuario['Seg_Nom_Pers'];
            $_SESSION['Pri_Ape_Pers'] = $usuario['Pri_Ape_Pers'];
            $_SESSION['Seg_Ape_Pers'] = $usuario['Seg_Ape_Pers'];
            $_SESSION['Fech_Nac_Pers'] = $usuario['Fech_Nac_Pers'];
            $_SESSION['Contraseña'] = $usuario['Contraseña'];
            header('location:index.php');
        }else{
            $_SESSION['usuario'] = "";
            echo"Usuario o contraseña invalidos";
        }
    }