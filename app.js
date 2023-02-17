let number = document.querySelector("#number");
let buttonCalc = document.querySelector("#button-calc");
let resultado = document.querySelector("#resultado");

number.addEventListener('keydown', () => {
    resultado.innerHTML = number.value;
});
