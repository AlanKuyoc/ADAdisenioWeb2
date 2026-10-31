const formulario = document.getElementById("formulario");
const resultado = document.getElementById("resultado");

formulario.addEventListener("submit", function (evento) {

    evento.preventDefault();

    let puntos = 0;
    let incorrectas = [];

    // Pregunta 1
    const pais = document.getElementById("pais").value.trim().toLowerCase();

    if (pais === "el vaticano" || pais === "vaticano") {
        puntos++;
    } else {
        incorrectas.push("Pregunta 1");
    }


    // Pregunta 2
    const dias = Number(document.getElementById("dias").value);

    if (dias === 365) {
        puntos++;
    } else {
        incorrectas.push("Pregunta 2");
    }


    // Pregunta 3
    const pintor = document.querySelector('input[name="pintor"]:checked');

    if (pintor && pintor.value === "da-vinci") {
        puntos++;
    } else {
        incorrectas.push("Pregunta 3");
    }


    // Pregunta 4
    const matematicas = Number(
        document.getElementById("matematicas").value
    );

    if (matematicas === 13) {
        puntos++;
    } else {
        incorrectas.push("Pregunta 4");
    }


    // Pregunta 5
    const lenguajes = document.querySelectorAll(
        'input[name="lenguaje"]:checked'
    );

    let respuestas = [];

    lenguajes.forEach(function (lenguaje) {
        respuestas.push(lenguaje.value);
    });

    respuestas.sort();

    const respuestasCorrectas = ["cpp", "javascript"];

    respuestasCorrectas.sort();

    if (
        respuestas.length === respuestasCorrectas.length &&
        respuestas.every(
            (respuesta, indice) =>
                respuesta === respuestasCorrectas[indice]
        )
    ) {
        puntos++;
    } else {
        incorrectas.push("Pregunta 5");
    }


    // Mostrar resultado
    if (incorrectas.length === 0) {

        resultado.textContent =
            `¡Excelente! Todas tus respuestas son correctas. Obtuviste ${puntos} de 5.`;

    } else {

        resultado.textContent =
            `Obtuviste ${puntos} de 5. Tienes incorrectas: ${incorrectas.join(", ")}.`;

    }

});