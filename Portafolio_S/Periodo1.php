<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Portafolio</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="./css/styles1.css"  rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <div class="container px-4">
            <a class="navbar-brand" href="index.php">Menu</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="./periodo1.php">Periodo 1</a></li>
                        <li class="nav-item"><a class="nav-link" href="./periodo2/periodo2.php">Periodo 2</a></li>
                        <li class="nav-item"><a class="nav-link" href="./Periodo3/periodo3.php">Periodo 3</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-primary bg-gradient text-white">
            <div class="container px-4 text-center">
                <h1 class="fw-bolder">Primer Periodo</h1>
                <p class="lead">Santiago Cardona</p>

            </div>
        </header>
        <!-- About section-->
        <section id="about">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                    <h1>EJERCICIO 1</h1>
    <h1>Area de un triangulo</h1>
    <?php
    $altura=5;
    $base=8;

    $resultado=($base*$altura)/2;
    
    echo "el area del triangulo donde su base",$base,"y la altura es:",$altura,"igual a",$resultado;

    ?>
    
    <br><br>
    <h1>EJERCICIO 2</h1>
    
  <h1>Prueba de imagen</h1>

    <center>

    <img src="img/santi.png" alt="img">

</center>
    <?php

    echo" el modulo de php funciona de forma correcta"


    ?>
     
     <br><br>
     <h1>EJERCICIO 3</h1>
        <h1> 
    <center>
    Calcular indice de IMC
    </center>
    </h1>
    <h3> peso(kg)</h3>
    <?php
    $peso=60;
    $altura=1.77;
    $resultado=$peso/($altura*$altura);

    echo"el indice de masa corporal para el peso de ",$peso," kg y la altura",$altura,"cm es de",$resultado;

    ?>
    <BR></BR>
    <h1> EJEMPLO CLASE 1</h1>
<?php
 echo"mi primera pagina web"

?> <section id="about">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>Aprende PHP</h2>
                     
                     <p>PHP es un lenguaje de programación interpretado​ del lado del servidor y de uso general que se adapta especialmente al desarrollo web</p>
                     <img src="./img/santi.png">
                    </div>
                </div>
            </div>
        </section>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services section-->
        <section class="bg-light" id="services">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>DESCRIPCIÓN</h2>
                        <p class="lead">El lenguaje PHP, es un lenguaje de programación que permite el desarrollo web o aplicaciones web dinámicas, el cual es
        apto para incrustar el lenguaje HTML, ahora bien, siempre siguiendo algunas reglas establecidas. Además, el lenguaje PHP
        favorece a la conexión entre el servidor y a la interfaz del usuario.</p>
                    </div>
                </div>
            </div>

        <!-- Footer-->
        <footer class="py-5 bg-dark">
        <div class="container px-4"><p class="m-0 text-center text-white">Portafolio &copy; Santiago Cardona 2024</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
