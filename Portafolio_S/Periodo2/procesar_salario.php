<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>procesar</title>
</head>
<body>
    
    
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $numEmpleados = isset($_POST['numEmpleados']) ? intval($_POST['numEmpleados']) : 0;

    
    if ($numEmpleados <= 0) {
        echo "<p>Por favor, ingrese un número válido de empleados.</p>";
    } else {
       
        $totalSalarios = 0;
        $contador = 1;

       
        do {
            $nombreCampo = "salarioEmpleado$contador";
            echo "<label for='$nombreCampo'>Salario del Empleado $contador:</label>";
            echo "<input type='number' name='$nombreCampo' id='$nombreCampo' required>";
            echo "<br>";

            $contador++;
        } while ($contador <= $numEmpleados);

        echo "<input type='submit' value='Calcular Salario Promedio'>";
    }
}
?>

</body>
</html>
