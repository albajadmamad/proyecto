<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Ventas Diarias</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="fondo">
    <header>
        <center>

        <h2>Menú de Ejercicios</h2>

        </center>

</header>
<ul>
    <li><a href="ventas.php">Ejercicio 1</a></li>
    <li><a href="factura.php">Ejercicio 2</a></li>
    <li><a href="impresion.php">Ejercicio 3</a></li>
    <li><a href="salario.php">Ejercicio 4</a></li>
</ul>

<h2>Registro de Ventas Diarias</h2>

<form action="calcular_ventas.php" method="post">
    <label for="dia1">Venta del día 1:</label>
    <input type="text" name="dia1" id="dia1" required>
    <br><br>

    <label for="dia2">Venta del día 2:</label>
    <input type="text" name="dia2" id="dia2" required>
    <br><br>

    <label for="dia3">Venta del día 3:</label>
    <input type="text" name="dia3" id="dia3" required>
    <br><br>

    <label for="dia4">Venta del día 4:</label>
    <input type="text" name="dia4" id="dia4" required>
    <br><br>

    <label for="dia5">Venta del día 5:</label>
    <input type="text" name="dia5" id="dia5" required>
    <br><br>

    <label for="dia6">Venta del día 6:</label>
    <input type="text" name="dia6" id="dia6" required>
    <br><br>

    <label for="dia7">Venta del día 7:</label>
    <input type="text" name="dia7" id="dia7" required>
    <br><br>

    <input type="submit" value="Calcular">
</form>

</body>
</html>
