console.log("calculadora.js funciona");
const numero = document.getElementById("entrada");
const botonElevar = document.getElementById("elevar");
const resultado = document.getElementById("resultado");

botonElevar.addEventListener("click", function () {

    const valor = Number(numero.value);

    const cuadrado = valor * valor;

    resultado.textContent = `El resultado es: ${cuadrado}`;
});