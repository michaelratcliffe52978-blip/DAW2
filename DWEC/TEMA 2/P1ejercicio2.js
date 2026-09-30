//EVeNTOS
document.getelementById("bValidar").addEventListener("click",validar);
//Seleccionontodas las cajas
const cajasTexto = document.queryselectorall('input[type="text"]',)


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

    let vNombre = validarUnDato(nombre, //);


    if(!vNombre || !vApellido ){
        throw 
    }
    }
    
    let edades= document
}
function validarUnDato(caja,){

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