<?php

    include 'conexion.php';
    $cedula = $_POST['cedula'];
    $correo = $_POST['correo'];
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $ciudad = $_POST['ciudad'];
    $tipo_usuario = 1;
    $contrasena = $_POST['contrasena'];

    try{
        $ins = $con -> query("INSERT INTO usuario(
            cedula, correo, nombre, telefono, ciudad, tipo_usuario, contrasena)
            VALUES ('$cedula', '$correo', '$nombre', '$telefono', '$ciudad', $tipo_usuario, '$contrasena')");
            include 'index.php';
            echo '<script language="javascript">alert("Usuario registrado");</script>';
    }catch(Exception $e){
        include 'index.php';
        echo '<script language="javascript">alert("Ocurrió un error");</script>';
    }
?>
