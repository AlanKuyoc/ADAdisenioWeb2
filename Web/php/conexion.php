<?php

$servidor = "localhost";
$usuario = "root";
$contraseña = "";
$base_datos = "alank_db";

$conexion = new mysqli(
    $servidor,
    $usuario,
    $contraseña,
    $base_datos
);

if ($conexion->connect_error) {
    die("Error de conexion: " . $conexion->connect_error);
}

$conexion->set_charset("utf8mb4");

?>