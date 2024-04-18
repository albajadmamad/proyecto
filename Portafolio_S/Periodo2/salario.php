<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="fondo">
    <header>
        <center>

        <h2>Menú de Ejercicios</h2>

        </center>

<header/>
<ul>
    <li><a href="ventas.php">Ejercicio 1</a></li>
    <li><a href="factura.php">Ejercicio 2</a></li>
    <li><a href="impresion.php">Ejercicio 3</a></li>
    <li><a href="salario.php">Ejercicio 4</a></li>
 
</ul>
<h2>Procesamiento de Datos de Empleados</h2>

<form action="procesar_salario.php" method="post">
    <label for="numEmpleados">Número de Empleados:</label>
    <input type="number" name="numEmpleados" id="numEmpleados" min="1" required>
    <br><br>

    <input type="submit" value="Calcular">
</form>
</body>
</html>