<?php

    print_r($_POST);
    if(!isset($_POST['id'])){
        header('Location:index.php?mensaje=error');
       //comentario

    }
    include 'model/conexion.php';
    $id = $_POST['id'];
    $nombre = $_POST["txtNombre"];
    $usuario = $_POST["txtUsuario"];
    $contrasena = $_POST["txtContrasena"];
    $puesto = $_POST["txtPuesto"];

    $sentencia = $bd->prepare("UPDATE usuarios SET name=?, user_name=?,password=?, puesto=? where id = ?; ");
    $resultado = $sentencia->execute([$nombre,$usuario,$contrasena,$puesto, $id]);

    if($resultado === true){
        header('Location: index.php?mensaje=modificado');
    }else{
        header('Location: index.php?mensaje=error');
        exit();
    }

?>
