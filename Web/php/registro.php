
<?php

// Conectarse a la base de datos
require("conexion.php");

// Recuperar datos del formulario
$nombre = $_POST['nombre'];
$contraseña = $_POST['contraseña'];

// Comprobar si el nombre ya existe
$sql = "SELECT * FROM usuarios WHERE nombre = '$nombre'";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {

    // Si ya existe, mostrar el mensaje correspondiente
    header("Location: ../registro.html?estado=existente");

} else {

    // Proteger contraseña
    $contraseña = password_hash($contraseña, PASSWORD_DEFAULT);

    // Registrar al usuario
    $sql = "INSERT INTO usuarios (nombre, contraseña) VALUES ('$nombre', '$contraseña')";

    if ($conexion->query($sql) === TRUE) {
        header("Location: ../registro.html?estado=exitoso");
    } else {
        header("Location: ../registro.html?estado=error");
    }

}

$conexion->close();

?>
