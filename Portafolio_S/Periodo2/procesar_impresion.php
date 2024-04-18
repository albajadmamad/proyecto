<link rel="stylesheet" type="text/css" href="style.css">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $numeroTareas = isset($_POST['numeroTareas']) ? intval($_POST['numeroTareas']) : 0;

   
    if ($numeroTareas <= 0) {
        echo "<p>Por favor, ingrese un número válido de tareas.</p>";
    } else {
       
        echo "<h3>Lista de Tareas Pendientes:</h3>";
        echo "<ul>";
        
        for ($i = 1; $i <= $numeroTareas; $i++) {
            echo "<li>Tarea $i: <input type='text' name='tarea$i' placeholder='Descripción de la tarea'></li>";
        }

        echo "</ul>";
    }
}
?>
