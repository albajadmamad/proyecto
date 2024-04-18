<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<h2>Generación de Facturas Mensuales</h2>

<form action="procesar_calcular.php" method="post">
    <label for="cliente">Cliente:</label>
    <input type="text" name="cliente" id="cliente" required>
    <br><br>

    <label for="meses">Número de Meses:</label>
    <input type="number" name="meses" id="meses" min="1" required>
    <br><br>

    <input type="submit" value="Generar">
</body>
</html>