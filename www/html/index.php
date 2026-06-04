<?php
$conexion = new mysqli("localhost", "miwebuser", "MiClave2026!", "miweb");
if ($conexion->connect_error) {
    die("Error: " . $conexion->connect_error);
}
echo "<h1>¡LAMP funciona!</h1>";
echo "<p>Conectado a MariaDB correctamente desde PHP " . phpversion() . "</p>";
?>
