<?php
$dbname = "ejercicio1";
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

// Añadir producto
if (isset($_POST['añadir'])) {
    $elemento = $_POST['elemento'];

    if (!empty($elemento)) {
        $stmt = $dbh->prepare("INSERT INTO listaCompra (objeto) VALUES (?)");
        $stmt->execute([$elemento]);
    }
}

// Eliminar producto
if (isset($_GET['eliminar'])) {
    $id = $_GET['eliminar'];

    $stmt = $dbh->prepare("DELETE FROM listaCompra WHERE id = ?");
    $stmt->execute([$id]);
}


// Mostrar productos
$stmt = $dbh->query("SELECT id, objeto FROM listaCompra");
$productos = $stmt->fetchAll(PDO::FETCH_ASSOC); //$productos contendrá un array asociativo con todos los datos


// Vaciar lista
if (isset($_GET['vaciar'])) {
    $dbh->query("DELETE FROM listaCompra");
}


require "ejercicio1.view.php";
?>