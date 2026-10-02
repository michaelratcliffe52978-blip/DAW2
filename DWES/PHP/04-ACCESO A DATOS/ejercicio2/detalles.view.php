
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalles del empleado</title>
        <style>
        th{
            color: #4285f4;

        }
        a {
            color: #4285f4;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <h2>Detalles del empleado</h2>

    <table border="1" cellpadding="10">

        <tr>
            <th>DNI</th>
            <td><?= htmlspecialchars($empleado["dni"]) ?></td>
        </tr>

        <tr>
            <th>Nombre</th>
            <td><?= htmlspecialchars($empleado["nombre"]) ?></td>
        </tr>

        <tr>
            <th>Apellidos</th>
            <td><?= htmlspecialchars($empleado["apellidos"]) ?></td>
        </tr>

        <tr>
            <th>Edad</th>
            <td><?= htmlspecialchars($empleado["edad"]) ?></td>
        </tr>

        <tr>
            <th>Fecha de nacimiento</th>
            <td><?= htmlspecialchars($empleado["fechaNacimiento"]) ?></td>
        </tr>

        <tr>
            <th>Email</th>
            <td><?= htmlspecialchars($empleado["email"]) ?></td>
        </tr>

        <tr>
            <th>Sexo</th>
            <td><?= htmlspecialchars($empleado["sexo"]) ?></td>
        </tr>

        <tr>
            <th>Curriculum</th>
            <td><?= htmlspecialchars($empleado["curriculum"] ?? "") ?></td>
        </tr>

    </table>

    <br>

    <a href="index.php">Volver al listado</a>

</body>
</html>