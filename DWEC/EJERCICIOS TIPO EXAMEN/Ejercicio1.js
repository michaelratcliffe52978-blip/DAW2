// EVENTOS
document.getElementById("bIniciarSesion").addEventListener("click", iniciar);
document.getElementById("bdarseDeAlta").addEventListener("click", alta);

//VALIDAR USER Y CONSTRASEÑA
function validarDato(caja, expresionRegular) {
    if (!expresionRegular.test(caja.value)) {
        caja.style.color = "red";
        caja.value = "Dato incorrecto";
        caja.dataset.esError = "true"; // Marcamos que la caja tiene un error
        return false; // Retornamos false en lugar de lanzar un throw inmediatamente para seguir validando
    }
    return true;
}

function iniciar() {
    try{
        let user = document.getElementById("usuario");
        let password = document.getElementById("password");

        let vUser = validarDato(user,/^[A-Z]{1}[a-z]+$/);
        let vPassword = validarDato(password,/^[A-Za-z0-9]+$/);

        // Si alguno de los campos de texto falló, lanzamos el error global
        if (!vUser || !vPassword) {
            throw "En el formulario hay datos incorrectos";
        }

        // Recuperar usuarios del almacenamiento local
        let usuarios = JSON.parse(localStorage.getItem("usuarios"));

        // Si no hay usuarios registrados
        if (usuarios == null) {
            throw "Usuario y/o contraseña no valido";
        }

    }
    catch(err) {
        alert(err);
    }
}
function alta(){
    try{

    }
    catch(err) {
        alert(err);
    }
}