
<?php

// Conectarse a la base de datos
require("conexion.php");

// Recuperar datos del formulario
$nombre = $_POST["nombre"];
$contraseña = $_POST["contraseña"];

// Consulta SQL para buscar al usuario
$sql = "SELECT * FROM usuarios WHERE nombre = '$nombre'";
$resultado = $conexion->query($sql);

// Comprobar si existe el usuario
if ($resultado->num_rows > 0) {

    $usuario = $resultado->fetch_assoc();

    // Comprobar la contraseña
    if (password_verify($contraseña, $usuario["contraseña"])) {

        header("Location: ../index.html");

    } else {

        header("Location: ../login.html?estado=error");

    }

} else {

    header("Location: ../login.html?estado=error");

}

$conexion->close();

?>
