//EVENTOS
document.getelementById("bValidar").addEventListener("click",validar);
document.getelementById("bBorrar").addEventListener("click",borrar);

//Seleccionontodas las cajas
const cajasTexto = document.queryselectorall('input[type="text"]','input[type="email"]')


function enviarFormulario() {
    let nombre = document.getElementById("nombre").value;
    let apellidos = document.getElementById("apellidos").value;
    let email = document.getElementById("email").value;
    let poblacion = document.getElementById("poblacion").value;
    let provincia = document.getElementById("provincia").value;
    let edad = document.getElementByName("edad");
        for(let x = 0; x < edad.length; x++){
            alert(edad[x].value + " " +edad[x].checked);
        }
    let conocer = document.getElementById("").value;


    // Comprobar que los campos no estén vacíos
    if (nombre === "" || apellidos === "" || email === "" || poblacion === "" || provincia === "" || edad === "") {
        alert("Debes rellenar todos los campos");
        return;
    }else{
        alert("Datos introducidos correctamente");

    }
}

function validarNombre(nombre){
    const regexNombre = /^[A-Za-z0-9]{4,20}$/;

    if(!regexNombre.test(nombre)){
        alert("El nombre: "+ nombre + " ha insertado correctamente.")
    }
    throw new Error("Nombre incorrecto")
}

function validar() {
    try{
    let nombre = document.getElementById("nombre");
    let apellidos = document.getElementById("apellidos");
    let email = document.getElementById("email");
    let poblacion = document.getElementById("poblacion");
    let provincia = document.getElementById("provincia");
    let edad = document.getElementByName("edad");
    let conocer = document.getElementById("").value;

    let vNombre = validarUnDato(nombre, /^[A-Z]{1}[a-z]+$/);

    let vApellido = validarUnDato(apellido, /^[A-Z]{1}[a-z]+$/);


    if(!vNombre || !vApellido || ){
        throw "En el formulario hay datos incorrectos";
    }

    let edades= document.getElementsByName("edad");
    let i;
    for(i = 0; i < edades.legth && !edades[i].checked; i++){
        throw "La edad es obligatoria";
    }
    let edad = edades[i].value;

    let conocidos = docuent.getElementByName("notificaciones");
    let conocido = "";
    const marcados = doucment.querySelector...

    }

    //Crear objeto
    let objeto = {
        nombre: nombre.value,
        apellido: apellido.value
    }
    let objetoJSON = JSON.stringify(objeto);

    alert("")
}

const cajasTexto = document.querySelectorAll('input[type="text"],input[]')

function validarUnDato(caja, expresionRegular){
    if(!expresionRegular.test(caja.value)){
        caja.style.color = "red";
        caja.value= "Daro incorrecto";
        caja.dataset.esError= "true";
        return false;
    }
}

function borrarFormulario(){
    let nombre = document.getElementById("nombre").value="";
    let apellidos = document.getElementById("apellidos").value="";
    let email = document.getElementById("email").value="@";
    let poblacion = document.getElementById("poblacion").value="";
    let provincia = document.getElementById("provincia").value="";
    let edad = document.getElementByName("edad");
    let conocer = document.getElementById("").value="";

}
function borrar(){
    cajasTexto.forEach(caja => {
        caja.value = "";
    
    }
}