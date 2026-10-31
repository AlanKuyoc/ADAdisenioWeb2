
<?php

// Conectarse a la base de datos
require("conexion.php");

// Recuperar datos del formulario
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$contraseña = $_POST["contraseña"];

// Proteger la contraseña
$contraseña = password_hash($contraseña, PASSWORD_DEFAULT);

// Consulta SQL para modificar al usuario
$sql = "UPDATE usuarios SET nombre = '$nombre', contraseña = '$contraseña' WHERE id = '$id'";

if ($conexion->query($sql) === TRUE) {

    if ($conexion->affected_rows > 0) {
        header("Location: ../usuarios.php?estado=modificado");
    } else {
        header("Location: ../usuarios.php?estado=no_modificado");
    }

} else {

    header("Location: ../usuarios.php?estado=no_modificado");

}

$conexion->close();

?>
