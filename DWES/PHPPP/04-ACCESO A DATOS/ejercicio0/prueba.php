<?php
$dbname = "alumnos";
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


// Ejemplo con parámetros
$stmt = $dbh->prepare("SELECT nombre, apellidos,edad FROM alumno");

$stmt->execute();

while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
 echo $row['nombre'] . " -- ";
 echo $row['apellidos'] . " -- ";
 echo $row['edad'] . "<br>";
}


$stmt = $dbh->query('SELECT nombre, apellidos, edad FROM alumno');
// Establecemos el modo en el que queremos
$stmt->setFetchMode(PDO::FETCH_ASSOC);
while($row = $stmt->fetch()) {
    echo $row['nombre'] . " ";
    echo $row['apellidos'] . " tiene ";
    echo $row['edad'] . " años<br>";
}


$dbh = null;
?>