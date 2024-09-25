<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: ./login.php"); 
    echo json_encode([0, 'Tienes que llenar los datos en el formulario']);
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del Usuario</title>
</head>
<body>
    <h1>Bienvenido, <?= $_SESSION['usuario']['nombre'] . ' ' . $_SESSION['usuario']['apellido']; ?></h1>
    <p>Email: <?= $_SESSION['usuario']['email']; ?></p>
    <a href="./cerrar_sesion.php">Cerrar sesión</a>
</body>
</html>
