<?php

$host = "localhost";      // Servidor de la BD (puede ser localhost o IP)
$usuario = "root";        // Usuario de la BD
$password = "";           // Contraseña del usuario de la BD
$base_datos = "bd_inscripcion";  // Nombre de la base de datos

// Crear conexión
$conexion = new mysqli($host, $usuario, $password, $base_datos);

// Verificar conexión
if ($conexion->connect_error) {
    die("❌ Error de conexión: " . $conexion->connect_error);
} else {
    // echo "✅ Conexión exitosa a la base de datos";
}
?>
