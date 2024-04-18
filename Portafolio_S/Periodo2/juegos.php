<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sala de Juegos</title>
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
                <h1>Sala de Juegos</h1>
                <p class="lead">Escribir un programa para una empresa que tiene salas de juegos para todas
                las edades y quiere calcular de forma automática el precio que debe cobrar
                a sus clientes por entrar. El programa debe preguntar al usuario la edad del
                cliente y mostrar el precio de la entrada. Si el cliente es menor de 4 años
                puede entrar gratis, si tiene entre 4 y 18 años debe pagar 5000 pesos y si es
                mayor de 18 años, 10000 pesos</p>
                <h5>Ingrese la edad</h5>
<form method="post">

<label for="edad"></label>
<input type="text" name="edad" id="edad">
<input type="submit" value="Enviar">
</form>

<?php
                if ($_SERVER ["REQUEST_METHOD"]== "POST"){
                    $edad= $_POST["edad"];
                    if ($edad < 4){
                        echo "El usuario puede entrar gratis
                        <h3>¡Bienvenido!<h3>";
                    }else if ($edad>=4 & $edad<18){
                        echo "El usuario tiene que pagar 5000 pesos 
                        <h3>¡Bienvenido!<h3>";
                    }else{
                        echo "El usuario debe de pagar 10000 pesos
                        <h3>¡Bienvenido!<h3>";
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
