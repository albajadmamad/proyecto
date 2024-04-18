<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Descuentos</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="styles2.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="quiz.php">Quiz</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="juegos.php">Sala de juegos</a></li>
                        <li class="nav-item"><a class="nav-link" href="descuento.php">Descuento</a></li>
                        <li class="nav-item"><a class="nav-link" href="multi.php">Multiplicacion</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page content-->
        <div class="container">
            <div class="text-center mt-5">
                <h1>Descuento</h1>
                <p class="lead">Imaginemos que en nuestra tienda hay un carnet por puntos y que alguien
                debe pagar el precio final de compra. Si tienes menos de 100 puntos
                realizaremos un descuento del 10%. Si es mayor a 100 y menor a 150
                aplicamos un 12%. Si tienes 150 un 15% y sino, el resto de los casos de
                más de 150, un 20%.
                </p>
<form method="post">

<h5>Ingrese los puntos de la tarjeta</h5>
<input type="text" name="puntos" id="puntos">
<input type="submit" value="Enviar">

</form>    
<?php
                if ($_SERVER ["REQUEST_METHOD"]== "POST"){
                    $puntos= $_POST["puntos"];
                    if ($puntos < 100){
                        echo " Su descuento es del 10%";
                    }else if ($puntos>=100 & $puntos<=150){
                        echo "Su descuento es del 12%";
                    }else{
                        echo "Su descuento es del 20%";
                    }
                }
                ?>    
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
