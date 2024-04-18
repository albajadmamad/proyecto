<link rel="stylesheet" type="text/css" href="style.css">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $totalVentas = 0;

    $dias = 7;
    $i = 1;

    while ($i <= $dias) {
        $nombreCampo = "dia" . $i;
        if (isset($_POST[$nombreCampo]) && is_numeric($_POST[$nombreCampo])) {
            $ventaDiaria = floatval($_POST[$nombreCampo]);
            $totalVentas += $ventaDiaria;
        }
        $i++;
    }

   
    echo "<h3>Total de Ventas en la semana: $" . number_format($totalVentas, 2) . "</h3>";
}
?>
