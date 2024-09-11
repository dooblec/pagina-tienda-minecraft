<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    // Aquí deberías verificar el usuario con una base de datos real.
    // Para simplificar, asumimos que el usuario existe.

    // Insertar sesión en la base de datos
    $sql = "INSERT INTO sesiones (usuario) VALUES ('$usuario')";
    if ($conn->query($sql) === TRUE) {
        $_SESSION['usuario'] = $usuario;
        header("Location: index.php"); // Redirigir al usuario a la página principal
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
