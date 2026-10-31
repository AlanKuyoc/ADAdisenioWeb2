const formulario = document.getElementById("formulario");

const nombre = document.getElementById("nombre");
const apellido = document.getElementById("apellido");

const animales = document.querySelectorAll('input[name="animal"]');
const actividades = document.querySelectorAll('input[name="actividad"]');

const cereal = document.getElementById("cereal");

const boton = document.querySelector(".boton");


formulario.addEventListener("submit", function (evento) {

    evento.preventDefault();

    // Validar nombre
    if (nombre.value.trim() === "") {
        alert("Por favor, llene el campo de nombre.");
        nombre.focus();
        return;
    }

    // Validar apellido
    if (apellido.value.trim() === "") {
        alert("Por favor, llene el campo de apellido.");
        apellido.focus();
        return;
    }

    // Validar radio buttons
    let animalSeleccionado = false;

    animales.forEach(function (animal) {
        if (animal.checked) {
            animalSeleccionado = true;
        }
    });

    if (!animalSeleccionado) {
        alert("Por favor, seleccione una opción para la pregunta ¿que te gusta mas?.");
        return;
    }

    // Validar checkboxes
    let actividadSeleccionada = false;

    actividades.forEach(function (actividad) {
        if (actividad.checked) {
            actividadSeleccionada = true;
        }
    });

    if (!actividadSeleccionada) {
        alert("Por favor, seleccione al menos una opción para la pregunta ¿que te gusta hacer?.");
        return;
    }

    // Si todo está correcto
    alert("Formulario enviado correctamente.");

    boton.disabled = true;
});