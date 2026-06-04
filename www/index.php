<?php
// Datos de conexión para Docker
$host = 'db';
$user = 'tinako';
$pass = 'tinako123';
$dbname = 'testdb';

try {
    $mysqli = new mysqli($host, $user, $pass, $dbname);
    
    if ($mysqli->connect_error) {
        throw new Exception("Error de conexión: " . $mysqli->connect_error);
    }
    
    $mysqli->set_charset("utf8mb4");
    
    echo "<h1>✅ ¡LAMP con Docker funciona!</h1>";
    echo "<p>Conectado a MariaDB correctamente.</p>";
    echo "<p><strong>Host:</strong> $host | <strong>BD:</strong> $dbname | <strong>Usuario:</strong> $user</p>";
    echo "<p>PHP Version: " . phpversion() . "</p>";
    
    // Prueba simple
    $result = $mysqli->query("SELECT NOW() as hora");
    $row = $result->fetch_assoc();
    echo "<p>Hora del servidor DB: " . $row['hora'] . "</p>";
    
    $mysqli->close();
    
} catch (Exception $e) {
    echo "<h1>❌ Error</h1>";
    echo "<p>" . $e->getMessage() . "</p>";
    echo "<p>Revisa que los contenedores estén arriba con: <code>docker ps</code></p>";
}
?>