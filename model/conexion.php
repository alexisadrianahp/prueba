<?php

$contrasena="51018";
$usuario="adriana";
$nombre_bd="pruebasHTTC";

try{
    $bd = new PDO(
        'mysql:host=localhost;
        dbname='.$nombre_bd,
        $usuario,
        $contrasena,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
    );
}catch(Exception $e){
    echo "Problemas en la conexión: " .$e->getMessage();
}

?>