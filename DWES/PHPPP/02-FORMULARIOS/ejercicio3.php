<?php  
if (isset($_POST["asunto"])) {
    $asunto = $_POST["asunto"];
    $email = $_POST["email"];
    $motivo = $_POST["type"];
    $mensaje = $_POST["textArea"];


    if (empty($asunto) || empty($email) || empty($motivo) || empty($mensaje)) {

        echo "Error: todos los campos son obligatorios";

    }else{

        echo "<h3>Mensaje enviado correctamente.</h3>";
        echo "<p>Asunto: $asunto</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Motivo: $motivo</p>";
        echo "<p>Mensaje: $mensaje</p>";

    }

}
    require "ejercicio3.view.php"; 
?>