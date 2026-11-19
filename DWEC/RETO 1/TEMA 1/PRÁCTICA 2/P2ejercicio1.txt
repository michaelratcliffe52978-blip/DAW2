/*Implementa una función llamada validarUsuario que reciba un nombre de usuario y valide que tenga entre 4 y 10 caracteres y que solo
contenga letras y números (usa una expresión regular).
Si el nombre de usuario no cumple con estos requisitos, lanza una excepción con un mensaje de error adecuado.*/

function validarUsuario() {
    try{
        let usuario = prompt("Indroduzca el usuario:");
        
        let expreg = new
            RegExp("^[A-Za-z0-9]{4,10}$");
        
        if(expreg.test(usuario))
            alert("El usuario cumple los requisitos")
        else 
            throw new Error("error adecuado");

    }catch(err){
        alert("El usuario NO cumple los requisitos")
    }         
}
validarUsuario();

/*Crea una función llamada validarContraseña que reciba una contraseña y valide lo siguiente: Debe tener al menos 8 caracteres, debe
contener al menos una letra mayúscula, una minúscula y un número (usa una expresión regular).
Si la contrasena no es válida, lanza una excepción con un mensaje explicando el error.*/
function validarContraseña() {
    try{
        let password = prompt("Indroduzca la constraseña:");
        
        let expreg = new
            RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[ˆA-Za-z\d]).{8,}$");
        
        if(expreg.test(password))
            alert("La contraseña cumple los requisitos")
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

validarContraseña();

/*Define una función llamada registrarUsuario que reciba el nombre de usuario y la contraseña.
Utiliza las funciones validarUsuario y validarContrasena para verificar que ambos valores sean correctos.
Si ambos son validos, comprueba que hay un usuario con esa contraseña en la 'base de datos'. Si lo hay muestra un mensaje que diga 
Bienvenidx, sino captura el error y muestra un mensaje de usuario y/o contrasena incorrecta.*/
let usuariosBD = new Set();

usuariosBD.add('Lucia','Aa1Aaa1xxx');
usuariosBD.add('Markel','Aa2Aaa2xxx');
usuariosBD.add('Ander','Aa3Aaa3xxx');
usuariosBD.add('Nerea','Aa4Aaa4xxx');
usuariosBD.add('Paula','Aa5Aaa5xxx');

function registrarUsuario(usuario, password) {
    try{
        let usuario = prompt("Indroduzca el usuario:");
        let password = prompt("Indroduzca la constraseña:");
        
        resultadoUser = validarUsuario(usuario);
        resultadoPassword = validarContraseña(password);
        
        if(resultadoUser==true && resultadoPassword==true){
            if(usuariosBD.has(usuresultadoUserrio)&&usuariosBD.has(resultadoPassword)){
                alert("Bienvenidx")
            }
        }else 
            throw new Error("ERROR");
    }catch{
        alert("Usuario y/o contrasena incorrecta")
    }
}
registrarUsuario();