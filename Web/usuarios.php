
<?php

// Conectarse a la base de datos
require("./php/conexion.php");

// Consultar los usuarios
$sql = "SELECT * FROM usuarios";
$consulta = $conexion->query($sql);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Usuarios - AlanK</title>

    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/usuarios.css">

</head>

<body>

    <header class="encabezado">

        <h1 class="logo">AlanK</h1>

        <nav class="navegacion">
            <ul>
                <li><a href="index.html">Inicio</a></li>
                <li><a href="usuarios.php">Usuarios</a></li>
                <li><a href="./php/cerrar_sesion.php">Cerrar sesión</a></li>
            </ul>
        </nav>

    </header>

    <main class="contenido-usuarios">

        <h2>Administración de usuarios</h2>

        <!-- TABLA DE USUARIOS -->

        <section class="tabla-contenedor">

            <h3>Usuarios registrados</h3>

            <table>

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Contraseña (hash)</th>
                    </tr>
                </thead>

                <tbody>

                    <?php

                    if ($consulta->num_rows > 0) {

                        while ($usuario = $consulta->fetch_assoc()) {

                            echo "<tr>";

                            echo "<td>" . $usuario["id"] . "</td>";
                            echo "<td>" . htmlspecialchars($usuario["nombre"]) . "</td>";
                            echo "<td class='hash'>" . htmlspecialchars($usuario["contraseña"]) . "</td>";

                            echo "</tr>";

                        }

                    } else {

                        echo "<tr><td colspan='3'>No hay usuarios registrados.</td></tr>";

                    }

                    ?>

                </tbody>

            </table>

        </section>

        <!-- MODIFICAR USUARIO -->

        <section class="formulario-usuario">

            <h3>Modificar usuario</h3>

            <form method="POST" action="./php/modificar_usuarios.php">

                <label for="id_modificar">ID del usuario:</label>
                <input type="number" id="id_modificar" name="id" required>

                <label for="nombre">Nuevo nombre:</label>
                <input type="text" id="nombre" name="nombre" maxlength="50" required>

                <label for="contraseña">Nueva contraseña:</label>
                <input type="password" id="contraseña" name="contraseña" minlength="6" required>

                <button type="submit">Modificar usuario</button>

            </form>

        </section>

        <!-- ELIMINAR USUARIO -->

        <section class="formulario-usuario">

            <h3>Eliminar usuario</h3>

            <form method="POST" action="./php/eliminar_usuarios.php">

                <label for="id_eliminar">ID del usuario:</label>
                <input type="number" id="id_eliminar" name="id" required>

                <button type="submit">Eliminar usuario</button>

            </form>

        </section>

    </main>

    <script src="./js/usuarios.js"></script>

</body>
</html>
