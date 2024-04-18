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
