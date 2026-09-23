<?php 
    session_start();


    if(isset($_POST["añadir"])) {
    
        echo $_SESSION["usuario"];
    }

    
    if(isset($_GET["nombre"])){
        session_start();
        session_unset();        // Eliminar todos los valores de la sesión (se pueden seguir almacenando valores)

    }
    require "ejercicio4.view.php";
?>