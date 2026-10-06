<?php 
    session_start();

    if(isset($_GET["accion"])) {
        $accion = $_GET["accion"];
        realizarAccion($accion);
    }
    $personas = cargarLista();


    function realizarAccion(string $accion): void {
        switch($accion){
            case "insertar":
                if(isset($_GET["persona"])){
                    $nombrePersona = $_GET["persona"];
                    cargarLista();
                    array_push($_SESSION["listaPersonas"], $nombrePersona);
                }
                break;
            case"vaciar":
                unset($_SESSION["listaPersonas"]);
                
        }
    }
    





    if(isset($_GET["nombre"])){
        session_start();
        session_unset();        // Eliminar todos los valores de la sesión (se pueden seguir almacenando valores)

    }
    
    require "ejercicio4.view.php";
?>