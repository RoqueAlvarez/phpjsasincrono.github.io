<?php
if ($_POST) {
    if (isset($_POST['nombre_producto']) && !empty($_POST['nombre_producto']) && 
        isset($_POST['precio_producto']) && !empty($_POST['precio_producto'])) {
            $nombreProducto = $_POST['nombre_producto'];
            $precioProducto = $_POST['precio_producto'];
        
            if (!isset($_SESSION['productos'])) {
                $_SESSION['productos'] = [];
            }
            $_SESSION['productos'][] = ['nombre' => $nombreProducto, 'precio' => $precioProducto];
    } else {
        echo "<script>alert('Por favor ingresa datos en cada cuadro');</script>";
    }
}
?>