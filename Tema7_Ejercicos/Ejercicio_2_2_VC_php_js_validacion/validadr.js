function iniciar() {
    let btn_Validar = document.getElementById("Enviar");
    let nombre = document.getElementById("nombre");
    btn_Validar.addEventListener("click", validarNombreJs());
}

function validarNombreJs() {
    if (nombre.value.length < 5) {
        alert(`Erro de formato le falta ${5-nombre.value.length} caracteres`);
        console.log(nombre.value.length);
    } else {
        console.log("Valor de nombre correcto");
        alert("Formato correcto siga asi");

    }
}