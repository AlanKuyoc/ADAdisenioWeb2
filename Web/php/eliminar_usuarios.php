
<?php

// Conectarse a la base de datos
require("conexion.php");

// Recuperar el ID del formulario
$id = $_POST["id"];

// Consulta SQL para eliminar al usuario
$sql = "DELETE FROM usuarios WHERE id = '$id'";

if ($conexion->query($sql) === TRUE) {

    if ($conexion->affected_rows > 0) {
        header("Location: ../usuarios.php?estado=eliminado");
    } else {
        header("Location: ../usuarios.php?estado=no_eliminado");
    }

} else {

    header("Location: ../usuarios.php?estado=no_eliminado");

}

$conexion->close();

?>
