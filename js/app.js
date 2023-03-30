const buttonCalc = document.querySelector("#button-calc");
const resultadoContainer = document.querySelector("#resultado-container");
const sinRespuesta = document.querySelector("#sin-respuesta");

buttonCalc.addEventListener('click', () => {

    const numero = document.querySelector("#number").value;
    const resultado = document.querySelector("#resultado");
    const sumaNumeros = document.querySelector('#suma-numeros');
    let suma = 0;
    let numerosSumados = "";
    let numerosSumadosC = "";
    let numeroInt = parseInt(numero);

    if (numeroInt < 0 || typeof numeroInt != 'number' || !Number.isInteger(numeroInt)) {
        sinRespuesta.style.display = 'none';
        resultadoContainer.style.display = 'block';
        sumaNumeros.innerHTML = '';
        resultado.innerHTML = 'El número ingresado debe ser un número entero positivo, ingresa otro número';
    } else {     
        for (let i=0; i<=numero; i++) {
            if (esPrimo(i) == true) {
                numerosSumados += i + ' + ';
                suma += parseInt(i);
            }
        }

        sinRespuesta.style.display = 'none';
        resultadoContainer.style.display = 'block';
        numerosSumadosC = numerosSumados.substring(0,numerosSumados.length - 2);
        sumaNumeros.innerHTML = numerosSumadosC;
        resultado.innerHTML = ' = ' + suma;

    }

});

function esPrimo(n) {
    if (n == 0 || n == 1 || n == 4) return false;
    for(let i = 2; i < n/2; i++) {
        if (n % i == 0) return false;
    }
    return true;
}

