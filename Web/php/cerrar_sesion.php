<?php

session_start();

// Eliminar los datos de la sesión
session_unset();

// Destruir la sesión
session_destroy();

// Regresar al login
header("Location: ../login.html");
exit();

?>