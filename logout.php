<?php
session_start();
include 'db.php';

$usuario = $_SESSION['usuario'];

// Actualizar la fecha de fin en la base de datos
$sql = "UPDATE sesiones SET fecha_fin = NOW() WHERE usuario = '$usuario' AND fecha_fin IS NULL";
if ($conn->query($sql) === TRUE) {
    session_unset();
    session_destroy();
    header("Location: index.php"); // Redirigir al usuario a la página principal
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
