
// Recuperar los parámetros de la URL
const parametros = new URLSearchParams(window.location.search);

const estado = parametros.get("estado");

// Alertas para eliminar usuarios
if (estado === "eliminado") {
    alert("Usuario eliminado exitosamente.");
}

if (estado === "no_eliminado") {
    alert("No se pudo eliminar el usuario. Verifica el ID.");
}

// Alertas para modificar usuarios
if (estado === "modificado") {
    alert("Usuario modificado exitosamente.");
}

if (estado === "no_modificado") {
    alert("No se pudo modificar el usuario. Verifica el ID.");
}

// Limpiar el parámetro de la URL
if (estado) {
    window.history.replaceState({}, document.title, window.location.pathname);
}
