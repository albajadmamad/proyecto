<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frutas</title>
</head>
<body>

    <?php
        echo "<table border='4'>";
        echo "<tr><th>Frutas<tr><th>";
 
    $nombres = array("maracuya", "banano", "manzana", "lulo");
 
    for ($i=0; $i<4; $i++){
        echo $nombres[$i]. "<br>"; 
    }
 

    ?>
    <br><br>
    
    <h1>punto 2 </h1>
    <?php
     echo "<table border='4'>";
     echo "<tr><th>Promedio<tr><th>";
$edades = array(25, 30, 35, 40,);
$sumaedad = array_sum($edades);
$numeroedad = count($edades);
$promedioedad = $sumaedad / $numeroedad;
echo "El promedio de edad es: $promedioedad";
?>
}
</body>

</html>