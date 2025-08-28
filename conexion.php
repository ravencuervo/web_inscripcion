<?php

$host = "localhost";
$usuario = "root"; 
$password = "";
$base_datos = "bd_inscripcion";

$conexion = new mysqli($host, $usuario, $password, $base_datos);

if ($conexion->connect_error) {
    error_log("Error de conexión a la base de datos: " . $conexion->connect_error);
    die("❌ Error interno, contacte al administrador.");
}
?>
