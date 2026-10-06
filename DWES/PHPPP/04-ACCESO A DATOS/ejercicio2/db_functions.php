<?php
$dbname = "ejercicio2";
$host = "localhost";
$user = "root";
$pass = "";

function connect($host, $dbname, $user, $pass){
    try {
        # MySQL
        $dbh= new PDO("mysql:host=$host;dbname=$dbname",$user, $pass);

        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $dbh;
    }
    catch(PDOException $e) {
        echo $e->getMessage();
        return null;
    }
}

$dbh = connect($host, $dbname, $user, $pass);

// Obtener todos los empleados
function obtenerEmpleados($dbh) {
    $consulta = $dbh->query("SELECT * FROM empleado");

    return $consulta->fetchAll(PDO::FETCH_ASSOC);
}


// Obtener un empleado por su DNI
function obtenerEmpleado($dbh, $dni) {
    $consulta = $dbh->prepare(
        "SELECT * FROM empleado WHERE dni = ?"
    );

    $consulta->execute([$dni]);

    return $consulta->fetch(PDO::FETCH_ASSOC);
}


// Insertar un empleado
function insertarEmpleado($dbh, $datos) {
    $consulta = $dbh->prepare(
        "INSERT INTO empleado
        (dni, nombre, apellidos, edad, fechaNacimiento, email, sexo, curriculum)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)"
    );

    $consulta->execute([
        $datos["dni"],
        $datos["nombre"],
        $datos["apellidos"],
        $datos["edad"],
        $datos["nacimiento"],
        $datos["email"],
        $datos["sexo"],
        $datos["cv"]
    ]);
}


// Eliminar un empleado
function eliminarEmpleado($dbh, $dni) {
    $consulta = $dbh->prepare(
        "DELETE FROM empleado WHERE dni = ?"
    );

    $consulta->execute([$dni]);
}


// Vaciar la lista de empleados
function vaciarEmpleados($dbh) {
    $dbh->exec("DELETE FROM empleado");
}

?>