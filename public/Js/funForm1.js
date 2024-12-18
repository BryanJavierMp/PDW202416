// Esto genera un numero aleatorio
let numeroAleatorio = Math.floor(Math.random() * 100) + 1;
// Esta es la funcion para reiniciar el juego
function FuncionReiniciar() {
    numeroAleatorio = Math.floor(Math.random() * 100) + 1;
    document.getElementById("InpNumero").value = "";
    document.getElementById("DivResultado").textContent = "";
}
// Esta es la funcion para adivinar el numero
function FuncionAdivinar() {
    var objetoDiv = document.getElementById("DivResultado");
    var lecturanumero = parseInt(document.getElementById("InpNumero").value);
    if (isNaN(lecturanumero)) {
        objetoDiv.textContent = "Ingrese valores numericos";
    } else if (lecturanumero > numeroAleatorio) {
        objetoDiv.textContent = "El numero es muy alto";
        document.getElementById("InpNumero").value = "";
    } else if (lecturanumero < numeroAleatorio) {
        objetoDiv.textContent = "El numero es muy bajo";
        document.getElementById("InpNumero").value = "";
    } else {
        objetoDiv.textContent = "Numero correcto";
    }
}
