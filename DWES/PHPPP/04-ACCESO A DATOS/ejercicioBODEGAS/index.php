<?php
require ("db_functions.php");

function realizarAccion($accion): void
{
        switch ($accion) {

            case 'listarBodegas':
                $bodegas = getAllBodegas(); // 1. Trae los datos de la BD
                require "views/index.view.php"; // 2. Muestra la vista
                die();
        }
    
}

// Comprobamos si el usuario ha realizado alguna acción:
if(isset($_GET["accion"])) {
    // Realizamos la acción correspondiente (insertar, eliminar, actualizar, etc.)
    realizarAccion($_GET["accion"]);
}

$bodegas = getAllBodegas();

require ("views/index.view.php");
?>
