<?php
session_start();

$expresion = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';

if (isset($_SESSION['usuario'])) {
    header("location: ./index.php");
}

if ($_POST) {
    if (isset($_POST['nombre']) && !empty($_POST['nombre']) && 
        isset($_POST['apellido']) && !empty($_POST['apellido']) &&
        isset($_POST['correo']) && !empty($_POST['correo']) &&
        isset($_POST['contrasena']) && !empty($_POST['contrasena'])) {

        if(is_numeric($_POST['nombre'])) {
            echo "<script>alert('El nombre no puede contener números');</script>";
        } else if(is_numeric($_POST['apellido'])) {
            echo "<script>alert('El apellido no puede contener números');</script>";
        } else {
            if (preg_match($expresion,$_POST['correo'])) {
                echo "<script>alert('Correo válido');</script>";
            } else {
                echo "<script>alert('Correo no válido');</script>";
            }
        }
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasena'];
    
        $_SESSION['registro'] = [
            "nombre" => $nombre,
            "apellido" => $apellido,
            "correo" => $correo,
            "contrasena" => $contrasena
        ];
    
        header('location:./login.php');
    } else {
        echo "<script>alert('No dejes cuadros vacios');</script>";
    }
}
?>