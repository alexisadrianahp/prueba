<?php

//LO QUE HACE ES AGREGAR USUARIOS!!
    //print_r($_POST);
    if(empty($_POST["oculto"]) || empty($_POST['txtNombre']) || empty($_POST['txtUsuario']) ||
    empty($_POST['txtContrasena']) || empty($_POST['txtPuesto'])){
        header('Location: index.php?mensaje=falta');
        exit();
    }
    include 'model/conexion.php';
    $nombre = $_POST["txtNombre"];
    $usuario = $_POST["txtUsuario"];
    $contrasena = $_POST["txtContrasena"];
    $puesto = $_POST["txtPuesto"];

    $sentencia = $bd->prepare("INSERT INTO usuarios(name, user_name,password, puesto) VALUES (?,?,?,?)");
    $resultado = $sentencia->execute([$nombre, $usuario, $contrasena, $puesto]);

    if($resultado === true){
        header('Location: index.php?mensaje=registrado');
    }else{
        header('Location: index.php?mensaje=error');
        exit();
    }
?>
