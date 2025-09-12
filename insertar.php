<?php
// insertar.php - Inserta un producto usando sentencias preparadas para mayor seguridad
include 'conexion.php';

$nombre = "Laptop";
$precio = 15000.00;

// Usar prepared statements evita inyección SQL
$stmt = $conexion->prepare("INSERT INTO productos (nombre, precio) VALUES (?, ?)");
$stmt->bind_param('sd', $nombre, $precio); // s = string, d = double (decimal)
if ($stmt->execute()) {
    echo "Producto registrado correctamente.";
} else {
    echo "Error al registrar producto: " . $stmt->error;
}
$stmt->close();
$conexion->close();
?>
