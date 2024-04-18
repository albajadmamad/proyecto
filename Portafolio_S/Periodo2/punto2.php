<!DOCTYPE html>
<html lang="en">
<head>
    <title>Par-Impar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand">Condicionales </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="punto1.php">Punto 1</a>
        <a class="nav-link" href="punto2.php">Punto 2</a>
        <a class="nav-link" href="punto3.php">Punto 3</a>
        <a class="nav-link" href="index2.php">CLASE 2</a>
      </div>
    </div>
  </div>
</nav>
<br><br>

<center>

<h1>Par o Impar</h1>

<form method="post">

<label for="numero">Digite un numero:</label>
<input type="number" name="numero" id="numero"><br><br>
<input type="submit" value="Enviar">

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST["numero"];

    if ($num%2 == 0){
        echo "<script>alert('el numero $num es par.')</script>";
    }else{
        echo "<script>alert('el numero $num es impar.')</script>";
    }
    
}

?>


</center>


    
<style>

body {
            font-family: Arial, sans-serif;
            background-color: grey;
            color: black;
        }


</style>

</body>
</html>