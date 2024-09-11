<?php
$host = '127.0.0.1'; // Cambia esto si es necesario
$db = 'tienda_minecraft';
$user = 'root'; // Cambia esto si es necesario
$pass = ''; // Cambia esto si es necesario

// Crear conexión
$conn = new mysqli($host, $user, $pass, $db);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
