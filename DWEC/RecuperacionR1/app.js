class Reserva {
    constructor(name, email, activity, date, notify){
        this._name = name;
        this._email = email;
        this._activity = activity;
        this._date = date;
        this._notify = notify;
    }

    get name(){
        return this._name;
    }
    
    get email(){
        return this._email;
    }

    get activity(){
        return this._activity;
    }

    get date(){
        return this._date;
    }

    get notify(){
        return this._notify;
    }
}


let arrayReservas = cargarReservas();

document.getElementById("addBtn").addEventListener("click", registrarReserva);
document.getElementById("clearBtn").addEventListener("click", limpiarReservas);
document.getElementById("saveLocalBtn").addEventListener("click", enviarLocal);
document.getElementById("sendBtn").addEventListener("click", enviarDatos);

function visualizarReservas(){
    let filas = "";

    arrayReservas.forEach(reserva => {
        filas += `
            <tr>
                <td>${reserva.name}</td>
                <td>${reserva.email}</td>
                <td>${reserva.activity}</td>
                <td>${reserva.date}</td>
                <td>${reserva.notify ? "Sí" : "No"}</td>
            </tr>
        `;
    });
   
    reservationsTable.innerHTML = filas;
}

function validarDato(clave, expresionRegular){
    if(!expresionRegular.test(clave)){
        return false;
    }
    return true;
}

function guardarNuevos(){
    localStorage.setItem("reserva", JSON.stringify(arrayReservas));
}


function cargarReservas(){
    const datos = JSON.parse(localStorage.getItem("reserva"));
    if(datos === null) return [];

    return datos.map(v => new Reserva(v._name, v._email, v._activity, v._date, v._notify));

}
   
function registrarReserva(){
    try{
        let fName = document.getElementById("name");
        let fEmail = document.getElementById("email");
        let fActivity = document.getElementById("activity");
        let fDate = document.getElementById("date");
        let fNotify = document.getElementById("notify");

        //Validaciones:
        let vName = validarDato(fName.value, /^[A-Za-z ]{2,40}$/);
        
        if(!vName||fActivity.value == ""||fDate.value == ""){
            throw new Error("Datos incorrectos");
        }

        const nuevaReserva = new Reserva(
            fName.value,
            fEmail.value,
            fActivity.value,
            fDate.value,
            fNotify.checked
        );

        arrayReservas.push(nuevaReserva);

        guardarNuevos();
        visualizarReservas();

        document.getElementById("name").value="";
        document.getElementById("email").value = "";
        document.getElementById("activity").value = "";
        document.getElementById("date").value = "";
        document.getElementById("notify").value = "";

        alert("Reserva registrada correctamente.");

    }catch(err){
        alert(err.message);
        console.log(err.message);
    }
}

function limpiarReservas(){
    try{
        if(arrayReservas.length === 0){
            throw new Error("No hay ningún registro almacenado");
        }

        arrayReservas = [];
        localStorage.removeItem("reserva");
        visualizarReservas();

        alert("Se han borrado todos los registros");

    }catch(err){
        alert(err.message);
        console.log(err.message);
    }
}

function enviarLocal(){
        try{
        let fName = document.getElementById("name");
        let fEmail = document.getElementById("email");
        let fActivity = document.getElementById("activity");
        let fDate = document.getElementById("date");
        let fNotify = document.getElementById("notify");

        //Validaciones:
        let vName = validarDato(fName.value, /^[A-Za-z ]{2,40}$/);
        
        if(!vName||fActivity.value == ""||fDate.value == ""){
            throw new Error("Datos incorrectos");
        }

        const nuevaReserva = new Reserva(
            fName.value,
            fEmail.value,
            fActivity.value,
            fDate.value,
            fNotify.checked
        );

        arrayReservas.push(nuevaReserva);

        visualizarReservas();
        guardarNuevos();
        
        document.getElementById("name").value="";
        document.getElementById("email").value = "";
        document.getElementById("activity").value = "";
        document.getElementById("date").value = "";
        document.getElementById("notify").value = "";

        alert("Reserva registrada correctamente.");
        alert("Objeto JSON: " + JSON.stringify(arrayReservas));

    }catch(err){
        alert(err.message);
        console.log(err.message);
    }

}

//FETCH
const URL_SERVER = "https://jsonplaceholder.typicode.com/posts";

async function enviarDatos(){
    try{
        if(arrayReservas.length === 0){
            throw new Error("No hay datos para enviar");
        }

        let datos = arrayReservas.map((reserva) => {
            return {
                name: reserva.name,
                email: reserva.email,
                activity: reserva.activity,
                date: reserva.date,
                notify: reserva.notify
            };
        });

        const respuesta = await fetch(URL_SERVER, {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify(datos)
        });

        if(!respuesta.ok){
            throw new Error("Error del servidor: " + respuesta.status);
        }

        const resultado = await respuesta.json();
        console.log(resultado);

        alert("Datos enviados correctamente");

    }catch(err){
        alert("No se pudo enviar: " + err.message);
    }
}

visualizarReservas();