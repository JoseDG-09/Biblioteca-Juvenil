<?php
    session_start();
    require ('ConexionPDO.php');

    $Id_Pers=$_SESSION['ID'];
    $Pri_Nom_Pers=$_POST['Pri_Nom_Pers'];
    $Seg_Nom_Pers=$_POST['Seg_Nom_Pers'];
    $Pri_Ape_Pers=$_POST['Pri_Ape_Pers'];
    $Seg_Ape_Pers=$_POST['Seg_Ape_Pers'];
    $Fech_Nac_Pers=$_POST['Fech_Nac_Pers'];
    $Contraseña=$_POST['Contraseña'];

    $sql='CALL ActualizarPersona (?, ?, ?, ?, ?, ?, ?)';

    $sentencia=$gbd->prepare($sql);
    $sentencia->bindParam(1, $Id_Pers, PDO::PARAM_STR_CHAR);
    $sentencia->bindParam(2, $Pri_Nom_Pers, PDO::PARAM_STR_CHAR);
    $sentencia->bindParam(3, $Seg_Nom_Pers, PDO::PARAM_STR_CHAR);
    $sentencia->bindParam(4, $Pri_Ape_Pers, PDO::PARAM_STR_CHAR);
    $sentencia->bindParam(5, $Seg_Ape_Pers, PDO::PARAM_STR_CHAR);
    $sentencia->bindParam(6, $Fech_Nac_Pers, PDO::ATTR_STRINGIFY_FETCHES);
    $sentencia->bindParam(7, $Contraseña, PDO::ATTR_STRINGIFY_FETCHES);
    $sentencia->execute();

    //Datos Adicionales

    $Fk_Id_Pers=$Id_Pers;
    $Dir_Dom_Adic=$_POST['Dir_Dom_Adic'];
    $Tel_Adic=$_POST['Tel_Adic'];
    $Edad_Adic=$_POST['Edad_Adic'];
    $Email_Adic=$_POST['Email_Adic'];

    $sql2='CALL ActualizarAdicional (?, ?, ?, ?, ?)';
    $sentencia2=$gbd->prepare($sql2);
    $sentencia2->bindParam(1, $Fk_Id_Pers, PDO::PARAM_STR_CHAR);
    $sentencia2->bindParam(2, $Dir_Dom_Adic, PDO::PARAM_STR_CHAR);
    $sentencia2->bindParam(3, $Tel_Adic, PDO::PARAM_STR_CHAR);
    $sentencia2->bindParam(4, $Edad_Adic, PDO::PARAM_STR_CHAR);
    $sentencia2->bindParam(5, $Email_Adic, PDO::PARAM_STR_CHAR);
    $sentencia2->execute();

    if($sentencia and $sentencia2){
        echo"Los datos se han actualizado correctamente, por favor vuelva a ingresar a la plataforma<br><a href='Login.html'>Login</a>";
        session_destroy();
    }else{
        echo"Error en la actualizacion";
    }