<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Multiplicacion</title>
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
                <h1>Multiplicacion</h1>
                <p class="lead">Crea un programa que solicite un número mediante un formulario y muestre
la tabla de multiplicar del número.</p>

<form  method="post">

<label for="num"></label>
<input type="text" name="num" id="num">
<input type="submit" value="Enviar">

</form>

<?php
if ($_SERVER ["REQUEST_METHOD"]== "POST"){

    $num = $_POST["num"];
    
   for ($i = 1; $i <= 10; $i++){
    $num1=$num*$i;
    echo $num1. " ";
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
