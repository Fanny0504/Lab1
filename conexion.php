<?php
// conexion.php - Conexión a la base de datos usando mysqli
// Cambia estos valores después de crear el usuario 'usuario_tienda'
$servidor = "localhost";
$usuario = "usuario_tienda"; // usuario con permisos sobre la BD 'tienda'
$password = "segura123";     // contraseña que definiste
$base_datos = "tienda";

// Crear conexión
$conexion = new mysqli($servidor, $usuario, $password, $base_datos);

// Verificar conexión
if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}
// Para evitar mostrar información sensible en producción, quitar mensajes de éxito.
?>
