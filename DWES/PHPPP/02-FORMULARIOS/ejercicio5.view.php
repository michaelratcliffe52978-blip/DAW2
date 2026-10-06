<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EJERCICIO 5</title>
</head>
<body>
    <h3>Catálogo de productos</h3>

    <form action="ejercicio4.php" method="POST">
        <table>

            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Cantidad</th>
            </tr>
            <tr>
                <td>Logitech K120</td>
                <td>Teclado multimedia USB plug&play</td>
                <td>25.99 €</td>
                <td>
                    <input type="number" name="cantidad[0]" value="0" min="0">
                </td>
            </tr>
            <tr>
                <td>Lenovo L15</td>
                <td>Mouse Lenovo 300 compacto inalámbrico</td>
                <td>12.99 €</td>
                <td>
                    <input type="number" name="cantidad[1]" value="0" min="0">
                </td>
            </tr>
            <tr>
                <td>Monitor LG X10</td>
                <td>Monitor LED de 17 pulgadas</td>
                <td>179.99 €</td>
                <td>
                    <input type="number" name="cantidad[2]" value="0" min="0">
                </td>
            </tr>
            <tr>
                <td>Monitor Lenovo Q24i</td>
                <td>Pantalla de 23,8 pulgadas</td>
                <td>172 €</td>
                <td>
                    <input type="number" name="cantidad[3]" value="0" min="0">
                </td>
            </tr>
            <tr>
                <td>ThinkPad X1 Extreme</td>
                <td>Portátil ThinkPad X1 Extreme</td>
                <td>1200 €</td>
                <td>
                    <input type="number" name="cantidad[4]" value="0" min="0">
                </td>
            </tr>
        </table>
        
        <br>

        <input type="submit" value="Comprar">
    
    </form>
</body>
</html>