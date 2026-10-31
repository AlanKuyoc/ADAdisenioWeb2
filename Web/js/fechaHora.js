const fechaActual = new Date();

const dia = fechaActual.getDate();
const año = fechaActual.getFullYear();

const meses = [
    "enero",
    "febrero",
    "marzo",
    "abril",
    "mayo",
    "junio",
    "julio",
    "agosto",
    "septiembre",
    "octubre",
    "noviembre",
    "diciembre"
];

const mes = meses[fechaActual.getMonth()];

document.getElementById("fecha").textContent = `Hoy es ${dia} de ${mes} del año ${año}`;