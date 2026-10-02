
<?php

require "db_functions.php";

// Añadir empleado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    insertarEmpleado($dbh, $_POST);

    header("Location: index.php");
    die();
}

// Eliminar empleado
if (isset($_GET["eliminar"])) {
    eliminarEmpleado($dbh, $_GET["eliminar"]);

    header("Location: index.php");
    die();
}

// Vaciar lista
if (isset($_GET["vaciar"])) {
    vaciarEmpleados($dbh);

    header("Location: index.php");
    die();
}

// Elegir la página
switch ($_GET["pagina"] ?? "index") {

    case "detalles":
        if (isset($_GET["dni"])) {
            $empleado = obtenerEmpleado($dbh, $_GET["dni"]);
        } else {
            $empleado = false;
        }

        if (!$empleado) {
            header("Location: index.php");
            die();
        }

        require "detalles.view.php";
        die();

    case "index":
    default:

        $empleados = obtenerEmpleados($dbh);

        require "index.view.php";
        die();
}
?>