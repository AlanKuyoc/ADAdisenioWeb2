const pesos = document.getElementById("pesos");
const botonConvertir = document.getElementById("convertir");

const resultadoDolares = document.getElementById("dolares");
const resultadoEuros = document.getElementById("euros");

const valorDolar = 18;
const valorEuro = 21;

botonConvertir.addEventListener("click", function () {

    const cantidad = Number(pesos.value);

    const dolares = cantidad / valorDolar;
    const euros = cantidad / valorEuro;

    resultadoDolares.textContent =
        `Equivalente en dólares: $${dolares.toFixed(2)} USD`;

    resultadoEuros.textContent =
        `Equivalente en euros: €${euros.toFixed(2)} EUR`;
});