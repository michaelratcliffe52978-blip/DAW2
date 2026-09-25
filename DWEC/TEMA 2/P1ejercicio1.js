//USUARIOS:
let usuarios = [
    {
        usuario: "miki123",
        password: "Hola1234!"
    },
    {
        usuario: "admin",
        password: "Admin123!"
    },
    {                                                  
        usuario: "usuario1",
        password: "Usuario123!"
    }
];

// Función para validar el nombre de usuario
function validarUsuario() {
    try{
        let expreg = new RegExp("^[A-Za-z0-9]{4,10}$");
        
        if(expreg.test(usuario))
            return true;
        else 
            throw new Error("error adecuado");

    }catch(err){
        alert("El usuario NO cumple los requisitos")
    }         
}

// Función para validar la contraseña
function validarContraseña() {
    try{        
        let expreg = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[ˆA-Za-z\d]).{8,}$");
        
        if(expreg.test(password))
            return true;
        else 
            throw new Error("error adecuado");
    }catch{
        alert("Dentro del catch");
        alert(err.name);
        alert(err.message);
        alert(err.stack);

        if (err instanceof ReferenceError ) {
            alert('ReferenceError');
        }
        else
            throw err;

    }
}

// Función para iniciar sesión
function iniciarSesion() {
    let usuario = document.getElementById("nombre").value;
    let password = document.getElementById("password").value;

    // Comprobar que los campos no estén vacíos
    if (usuario === "" || password === "") {
        alert("Debes rellenar todos los campos");
        return;
    }


    let encontrado = false;

    for(let i = 0; i < usuarios.length ; i++){
        if (usuarios[i].usuario === usuario && usuarios[i].password === password) {
            encontrado = true;
        }
    }

    if(encontrado){
        alert('Inicio de sesión correcto');
    }else{
        alert('Usuario o contraseña incorrectos')
    }

}

// Función para salir
function salir() {
    document.getElementById("nombre").value = "";
    document.getElementById("password").value = "";
}