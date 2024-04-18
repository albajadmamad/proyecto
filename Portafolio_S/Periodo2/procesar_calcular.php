<link rel="stylesheet" type="text/css" href="style.css">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $cliente = isset($_POST['cliente']) ? $_POST['cliente'] : '';
    $numMeses = isset($_POST['meses']) ? intval($_POST['meses']) : 0;

    
    if (empty($cliente) || $numMeses <= 0) {
        echo "<p>Por favor, complete todos los campos correctamente.</p>";
    } else {
        
        $mes = 1;
        $contador = 1;

        
        do {
            echo "<p>Factura para el cliente '$cliente' - Mes $mes</p>";
           

            $mes++;
            $contador++;
        } while ($contador <= $numMeses);
    }
}
?>
