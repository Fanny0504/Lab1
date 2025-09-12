<?php
// index.php - Muestra los productos en una tabla HTML
include 'conexion.php';

$sql = "SELECT * FROM productos";
$resultado = $conexion->query($sql);
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Productos - Practica1</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    table { border-collapse: collapse; width: 80%; }
    th, td { border: 1px solid #333; padding: 8px; text-align: left; }
  </style>
</head>
<body>
  <h1>Productos registrados</h1>
  <?php if ($resultado->num_rows > 0): ?>
    <table>
      <thead><tr><th>ID</th><th>Nombre</th><th>Precio</th></tr></thead>
      <tbody>
        <?php while ($fila = $resultado->fetch_assoc()): ?>
          <tr>
            <td><?php echo htmlspecialchars($fila['id']); ?></td>
            <td><?php echo htmlspecialchars($fila['nombre']); ?></td>
            <td>$<?php echo htmlspecialchars($fila['precio']); ?></td>
          </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  <?php else: ?>
    <p>No hay productos registrados.</p>
  <?php endif; ?>

<?php $conexion->close(); ?>
</body>
</html>
