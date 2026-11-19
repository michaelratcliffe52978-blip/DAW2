// Eventos
document.getElementById("bValidar").addEventListener("click", validar);
document.getElementById("bBorrar").addEventListener("click", borrar);

// Selecciono todas las cajas
const cajasTexto = document.querySelectorAll('input[type="text"],input[type="email"]');

// Controlamos el focus de cada caja para ponerla bien si venimos de un error.
cajasTexto.forEach(caja => {
    caja.addEventListener('focus', () => {
        // Limpiamos la caja SI contiene un mensaje de error previo
        if (caja.dataset.esError === "true") {
            caja.value = "";
            caja.style.color = 'black';
            caja.dataset.esError = "false"; // Limpiamos la marca de error
        }
    });
});

function validarUnDato(caja, expresionRegular) {
    if (!expresionRegular.test(caja.value)) {
        caja.style.color = "red";
        caja.value = "Dato incorrecto";
        caja.dataset.esError = "true"; // Marcamos que la caja tiene un error
        return false; // Retornamos false en lugar de lanzar un throw inmediatamente para seguir validando
    }
    return true;
}

function validar() {
    try {
        let nombre = document.getElementById("nombre");
        let apellido = document.getElementById("apellido");
        let correo = document.getElementById("correo");
        let poblacion = document.getElementById("poblacion");
        let provincia = document.getElementById("provincia");

        // Validar cada caja de texto y marcarla en rojo si falla
        let vNombre = validarUnDato(nombre,/^[A-Z]{1}[a-z]+$/);
        
        let vApellido = validarUnDato(apellido,/^[A-Z]{1}[a-z]+$/);

        let vCorreo = validarUnDato(correo,/^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,4})$/);

        let vPoblacion = validarUnDato(poblacion,/^[A-Z]{1}[a-z]+$/);
        
        let vProvincia = validarUnDato(provincia,/^[A-Z]{1}[a-z]+$/);

        // Si alguno de los campos de texto falló, lanzamos el error global
        if (!vNombre || !vApellido || !vCorreo || !vPoblacion || !vProvincia) {
            throw "En el formulario hay datos incorrectos";
        }

        // Radios y checkbox
        let edades = document.getElementsByName("edad");
        let i;
        for (i = 0; i < edades.length && !edades[i].checked; i++);
        if (i == edades.length)
            throw "La edad es obligatoria";
        let edad = edades[i].value;

        let conocidos = document.getElementsByName("razon");
        let conocido = "";
        for (i = 0; i < conocidos.length; i++) {
            if (conocidos[i].checked) {
                conocido += conocidos[i].value + " ";
            }
        }

        // Crear objeto
        let objeto = {
            nombre: nombre.value, 
            apellido: apellido.value,
            correo: correo.value,
            poblacion: poblacion.value,
            provincia: provincia.value,
            edad: edad,
            conocido: conocido
        };

        let objetoJSON = JSON.stringify(objeto);

        alert("Tu nombre es: " + objeto.nombre
            + "\n Tu apellido es: " + objeto.apellido
            + "\n Tu correo es: " + objeto.correo
            + "\n Tu poblacion es: " + objeto.poblacion
            + "\n Tu provincia es: " + objeto.provincia
            + "\n Tu edad es entre: " + objeto.edad
            + "\n Nos conoces mediante: " + objeto.conocido);

        alert("Objeto json: " + objetoJSON);
    }
    catch(err) {
        alert(err);
    }
}

// Función borrar datos
function borrar() {
    cajasTexto.forEach(caja => {
        caja.value = "";
        caja.style.color = "black";
        caja.dataset.esError = "false";
    });

    let edades = document.getElementsByName("edad");
    let i;
    for (i = 0; i < edades.length && !edades[i].checked; i++);
    if (i != edades.length)
        edades[i].checked = false;

    let conocidos = document.getElementsByName("razon");
    for (i = 0; i < conocidos.length; i++) {
        if (conocidos[i].checked) {
            conocidos[i].checked = false;
        }
    }
}

/*
dataset es una propiedad de JavaScript que te permite guardar información personalizada dentro de 
cualquier etiqueta HTML sin romper el estándar del lenguaje.

En HTML, puedes inventarte atributos propios siempre que empiecen por la palabra `data-`.

<input type="text" id="nombre" data-es-error="true">

En JavaScript puedes leer o cambiar ese atributo usando la propiedad dataset:

const caja = document.getElementById("nombre");

console.log(caja.dataset.esError); // Muestra: "true"

caja.dataset.esError = "false"; 

HTML usa guiones (`data-es-error`), pero JavaScript lo convierte automáticamente a formato *camelCase* 
(`dataset.esError`).

Actúa como una memoria temporal para la caja. Le indica a JavaScript si el texto guardado actualmente 
es un dato real que escribió el usuario o si es un mensaje de error del sistema.

Sin dataset.esError ocurre este problema:

// SI NO USAMOS DATASET:
caja.addEventListener('focus', () => {
  caja.value = ""; // Se borra SIEMPRE que el usuario haga clic
});


Con dataset.esError, JavaScript verifica antes de borrar:

// USANDO DATASET:
caja.addEventListener('focus', () => {
  // ¿Esta caja tiene la marca de error en true?
  if (caja.dataset.esError === "true") {
    caja.value = "";             // Borra el mensaje "Dato incorrecto"
    caja.style.color = "black";   // Regresa el texto a negro
    caja.dataset.esError = "false"; // Quita la marca de error
  }
  // Si no tenía la marca (era un dato normal escrito por el usuario), no hace nada y no se borra.
});
*/
