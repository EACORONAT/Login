<?php
$conexion = new mysqli("localhost", "eacoronat", "ecorooon4", "login");
$conexion->set_charset("utf8");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
