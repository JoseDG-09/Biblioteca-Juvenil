<?php
    $dsn = 'mysql:dbname=bd_biblioteca;host=localhost';
    $usuario_bd = 'root';
    $contraseña = '';

    try {
        $gbd = new PDO($dsn, $usuario_bd, $contraseña);
    } catch (PDOException $e) {
        echo 'Falló la conexión: ' . $e->getMessage();
    }
    return $gbd;