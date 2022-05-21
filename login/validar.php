<?php


include_once "../model/conexion.php";

$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
$sentencia = $bd -> query("SELECT * FROM usuarios where user_name='$usuario' and password='$contrasena';");
$usuarios = $sentencia->fetch(PDO::FETCH_OBJ);



if($usuarios){
    session_start(); 
    $_SESSION['usuario']=$usuario;
    header('Location: ../index.php?mensaje=sesion');
}else{
    header('Location: login.php?mensaje=error');
}



?>