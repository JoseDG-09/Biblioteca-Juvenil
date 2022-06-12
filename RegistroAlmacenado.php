<?php
    require('ConexionPDO.php');

    $Id_Pers=$_POST['Id_Pers'];
    $Pri_Nom_Pers=$_POST['Pri_Nom_Pers'];
    $Seg_Nom_Pers=$_POST['Seg_Nom_Pers'];
    $Pri_Ape_Pers=$_POST['Pri_Ape_Pers'];
    $Seg_Ape_Pers=$_POST['Seg_Ape_Pers'];
    $Fech_Nac_Pers=$_POST['Fech_Nac_Pers'];
    $Contraseña=$_POST['Contraseña'];

    $sql='CALL AgregarNuevaPersona (?, ?, ?, ?, ?, ?, ?)';

    $sentencia=$gbd->prepare($sql);
    $sentencia->bindParam(1, $Id_Pers, PDO::PARAM_STR_CHAR);
    $sentencia->bindParam(2, $Pri_Nom_Pers, PDO::PARAM_STR_CHAR);
    $sentencia->bindParam(3, $Seg_Nom_Pers, PDO::PARAM_STR_CHAR);
    $sentencia->bindParam(4, $Pri_Ape_Pers, PDO::PARAM_STR_CHAR);
    $sentencia->bindParam(5, $Seg_Ape_Pers, PDO::PARAM_STR_CHAR);
    $sentencia->bindParam(6, $Fech_Nac_Pers, PDO::ATTR_STRINGIFY_FETCHES);
    $sentencia->bindParam(7, $Contraseña, PDO::PARAM_STR_CHAR);
    $sentencia->execute();

    //Dato adicional

    $Id_Dat_Adic=$_POST['Id_Dat_Adic'];
    $Dir_Dom_Adic=$_POST['Dir_Dom_Adic'];
    $Tel_Adic=$_POST['Tel_Adic'];
    $Edad_Adic=$_POST['Edad_Adic'];
    $Email_Adic=$_POST['Email_Adic'];
    $Fk_Id_Pers=$_POST['Fk_Id_Pers'];
    $Fk_Id_Gen=$_POST['Fk_Id_Gen'];

    $Fk_Id_Pers=$Id_Pers;

    if($Fk_Id_Gen=='Masculino') {
        $Fk_Id_Gen='001';
    } if($Fk_Id_Gen=='Femenino') {
        $Fk_Id_Gen='002';
    } if($Fk_Id_Gen=='Otro') {
        $Fk_Id_Gen='003';
    }

    $sql2='CALL AgregarNuevoAdicional (?, ?, ?, ?, ?, ?, ?)';
    $sentencia2=$gbd->prepare($sql2);
    $sentencia2->bindParam(1, $Id_Dat_Adic, PDO::PARAM_NULL);
    $sentencia2->bindParam(2, $Dir_Dom_Adic, PDO::PARAM_STR_CHAR);
    $sentencia2->bindParam(3, $Tel_Adic, PDO::PARAM_STR_CHAR);
    $sentencia2->bindParam(4, $Edad_Adic, PDO::PARAM_STR_CHAR);
    $sentencia2->bindParam(5, $Email_Adic, PDO::PARAM_STR_CHAR);
    $sentencia2->bindParam(6, $Fk_Id_Pers, PDO::PARAM_STR_CHAR);
    $sentencia2->bindParam(7, $Fk_Id_Gen, PDO::PARAM_STR_CHAR);
    $sentencia2->execute();


    if($sentencia and $sentencia2){
        echo"Gracias por registrarse por favor vuelva a la pagina de Login para que pueda ingresar a la pagina<br><a href='Login.html'>Login</a>";
    }else{
        include("Registro.php");
    }