<?php
session_start();

if (!isset($_SESSION['tareas'])) {
    $_SESSION['tareas'] = [
        ['tarea' => 'Estudiar para el examen de matemáticas', 'completada' => false],
        ['tarea' => 'Leer el libro de historia', 'completada' => false],
        ['tarea' => 'Escribir el ensayo de filosofía', 'completada' => false],
        ['tarea' => 'Preparar la presentación de ciencias', 'completada' => false],
        ['tarea' => 'Revisar las notas de programación', 'completada' => false],
    ];
}

if (isset($_POST['completar'])) {
    foreach ($_POST['tareaIndex'] as $index => $estado) {
        $_SESSION['tareas'][$index]['completada'] = true;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Tareas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
            color: #333;
        }
        .tarea {
            margin: 5px;
            padding: 10px;
            background: white;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .completada {
            text-decoration: line-through;
            color: #888;
        }
    </style>
</head>
<body>
    <h1>Lista de Tareas</h1>
    
    <form method="post">
        <?php foreach ($_SESSION['tareas'] as $index => $tarea): ?>
            <div class="tarea <?php if ($tarea['completada']) echo 'completada'; ?>">
                <input type="checkbox" name="tareaIndex[<?php echo $index; ?>]" onchange="this.form.submit()" <?php if ($tarea['completada']) echo 'checked'; ?>>
                <?php echo $tarea['tarea']; ?>
            </div>
        <?php endforeach; ?>
        <input type="hidden" name="completar" value="true">
    </form>
</body>
</html>
