<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EJERCICIO 3</title>
</head>
<body>
    <h3>FORULARIO DE CONTACTO</h3>

    <form action="ejercicio3.php" method="POST">
        <p>
            <label for="asunto">Asunto: </label><br>
            <input type="text" id="asunto" name="asunto" required>
        </p>
        <p>
            <label for="email">Email: </label><br>
            <input type="email" id="email" name="email" value="" size="40" required>
        </p>
        <p>
            <label for="operacion">Motivo: </label><br>
            <select id="tipo" name="type" size="1">
                <option value="" disabled selected>--Selecciona--</option>
                <option value="soporte">Soporte técnico</option>
                <option value="info">Información de productos</option>
                <option value="queja">Queja</option>
                <option value="otro">Otro</option>

            </select>
        </p>
        <p>
            <label for="textArea">Mensaje: </label><br>
            <textarea type="textArea" id="textArea" name="textArea" rows="4" cols="50" placeholder="Escribe tu mensaje aquí..." required></textarea>
        </p>
        
        <p>
            <input type="submit" value="Enviar">
        </p>
    </form>
</body>
</html>