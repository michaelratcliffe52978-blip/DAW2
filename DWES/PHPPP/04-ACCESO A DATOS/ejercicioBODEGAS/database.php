<?php
require_once 'config.php';
// Variable global para la conexión (singleton pattern simple)
$db_connection = null;

function getDbConnection() {
    global $db_connection;
    
    if ($db_connection === null) {
        try {
            $db_connection = new PDO(
                "mysql:host=".DB_HOST.";dbname=".DB_NAME, 
                DB_USER, 
                DB_PASS
            );
            $db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //si hay un error en la base de datos, lanza una excepción
            $db_connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); //cuando recojas datos de la BD, devuélvelos como objetos
        } catch(PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }
    
    return $db_connection;
}