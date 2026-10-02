
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Empleados</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            width: 85%;
            margin: 30px auto;
        }

        h2, p {
            text-align: center;
            color: #222;
        }

        .contenedor {
            display: flex;
            gap: 30px;
        }

        .listado {
            width: 65%;
        }

        .formulario {
            width: 35%;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        input, select, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        button {
            background-color: #1473e6;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
        }

        a {
            color: #4285f4;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <h2>App de Gestión de Empleados</h2>

    <p>
        Bienvenido a la aplicación de aprendizaje Gestión de Empleados.
        Este ejercicio tiene como objetivo repasar el acceso a datos
        mediante PDO y separar la lógica de la presentación.
    </p>

    <div class="contenedor">
        <div class="listado">

            <h3>Listado de empleados</h3>

            <table>
                <tr>
                    <th>DNI</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Opciones</th>
                </tr>

                <?php foreach ($empleados as $empleado): ?>

                    <tr>
                        <td>
                            <?= htmlspecialchars($empleado["dni"]) ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($empleado["nombre"]) ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($empleado["apellidos"]) ?>
                        </td>

                        <td>
                            <a href="index.php?pagina=detalles&dni=<?= urlencode($empleado["dni"]) ?>">
                                Detalles
                            </a>
                            |
                            <a href="index.php?eliminar=<?= urlencode($empleado["dni"]) ?>"
                               onclick="return confirm('¿Eliminar empleado?')">
                                Eliminar
                            </a>
                        </td>
                    </tr>

                <?php endforeach; ?>

            </table>

            <br>

            <p style="text-align: left;">
                * Opción secreta:
                <a href="index.php?vaciar=1"
                   onclick="return confirm('¿Vaciar la lista de empleados?')">
                    Vaciar lista
                </a>
            </p>

        </div>

        <div class="formulario">

            <h3>Añadir nuevo empleado</h3>

            <form action="index.php" method="POST">

                <input type="text" name="nombre"
                       placeholder="Nombre" required>

                <input type="text" name="apellidos"
                       placeholder="Apellidos" required>

                <input type="number" name="edad"
                       placeholder="Edad"
                       min="0" max="99" required>

                <input type="date" name="nacimiento" required>

                <input type="email" name="email"
                       placeholder="Email" required>

                <input type="text" name="dni"
                       placeholder="12345678A"
                       pattern="[0-9]{8}[A-Za-z]"
                       maxlength="9" required>

                <select name="sexo" required>
                    <option value="" disabled selected>--Selecciona--</option>
                    <option value="Hombre">HOMBRE</option>
                    <option value="Mujer">MUJER</option>
                    <option value="Otro">OTRO</option>
                </select>

                <textarea name="cv" rows="4" placeholder="Curriculum"></textarea>

                <button type="submit">Añadir empleado</button>

            </form>

        </div>
    </div>

</body>
</html>