<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/styles1.css" rel="stylesheet" />
    <h1>Actividad de array</h1>
</head>
<body>
    <?php
$notas = array(
    "Matemáticas" => array(
        "Estudiante1" => array(8, 7, 9),
        "Estudiante2" => array(6, 5, 7),
        "Estudiante3" => array(9, 8, 9)
    ),
    "Ciencias" => array(
        "Estudiante1" => array(7, 8, 9),
        "Estudiante2" => array(6, 7, 8),
        "Estudiante3" => array(8, 9, 9)
    ),
    "Literatura" => array(
        "Estudiante1" => array(8, 8, 7),
        "Estudiante2" => array(7, 6, 8),
        "Estudiante3" => array(9, 8, 9)
    )
);

// Recorrer el array $notas y mostrar la información de las notas de cada estudiante
foreach ($notas as $asignatura => $estudiantes) 
    echo "Asignatura: $asignatura\n";
    foreach ($estudiantes as $estudiante => $notas_estudiante) 
        echo "Estudiante: $estudiante\n";
        echo "Notas: ";
        foreach ($notas_estudiante as $nota) {
            echo "$nota ";
        }
    ?>
    <br><br>

<button type="button" onclick="window.location.href = 'periodo3.php';" class="btn btn-primary">Volver</button><br><br>


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
    </form><br><br>

    <?php
session_start();
if (!isset($_SESSION['inventario'])) {
    $_SESSION['inventario'] = [
        ['nombre' => 'Manzanas', 'precio' => 0.32, 'stock' => 150],
        ['nombre' => 'Pan', 'precio' => 1.50, 'stock' => 80],
        ['nombre' => 'Leche', 'precio' => 0.90, 'stock' => 120],
        ['nombre' => 'Huevos', 'precio' => 2.10, 'stock' => 200],
        ['nombre' => 'Queso', 'precio' => 3.00, 'stock' => 60],
    ];
}
if (isset($_POST['agregar'])) {
    $_SESSION['inventario'][] = [
        'nombre' => $_POST['nombre'],
        'precio' => floatval($_POST['precio']),
        'stock' => intval($_POST['stock'])
    ];
}
if (isset($_POST['actualizar'])) {
    foreach ($_SESSION['inventario'] as $key => $value) {
        if ($value['nombre'] == $_POST['nombreActualizar']) {
            $_SESSION['inventario'][$key]['precio'] = floatval($_POST['nuevoPrecio']);
            break;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Productos en un Supermercado</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { text-align: left; padding: 8px; border: 1px solid #ddd; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Inventario de Productos</h1>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Stock</th>
        </tr>
        <?php foreach ($_SESSION['inventario'] as $producto): ?>
        <tr>
            <td><?php echo $producto['nombre']; ?></td>
            <td><?php echo $producto['precio']; ?></td>
            <td><?php echo $producto['stock']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h2>Agregar Producto</h2>
    <form method="post">
        Nombre: <input type="text" name="nombre" required><br>
        Precio: <input type="number" step="0.01" name="precio" required><br>
        Stock: <input type="number" name="stock" required><br>
        <input type="submit" name="agregar" value="Agregar Producto">
    </form>

    <h2>Actualizar Precio del Producto</h2>
    <form method="post">
        Nombre del Producto: <input type="text" name="nombreActualizar" required><br>
        Nuevo Precio: <input type="number" step="0.01" name="nuevoPrecio" required><br>
        <input type="submit" name="actualizar" value="Actualizar Precio">
    </form>
</body>

</html>