<?php
session_start();
require_once("./app/config/dependencias.php");
require_once("./app/controller/inicio.php");
require_once("./app/controller/registro_producto.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=CSS."bootstrap.min.css";?>">
    <link rel="stylesheet" href="<?=CSS."inicio.css";?>">
    <title>Inventario</title>
</head>
<body class="vh-100 d-flex flex-column justify-content-center align-items-center"> 
    <div class="container text-center">
        <h1 class="text-white mb-5">Bienvenido</h1>
        <h2 class="text-white mb-5">Tienda 2</h2>
        
        <div class="row w-100">
            <div class="col-lg-6 col-md-8 col-sm-12 mx-auto">
                <form action="./index.php" method="post">
                    <div class="input-group mt-3">
                        <input type="text" class="form-control" placeholder="Ingrese el nombre del producto" name="nombre_producto" value="">
                    </div>
                    <div class="input-group mt-3">
                        <input type="number" class="form-control" placeholder="Ingrese el precio del producto" name="precio_producto" value="">
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-sm w-100 text-white">Registrar producto</button> 
                    </div>
                </form>
            </div>
        </div>
        
        <div class="row w-100 mt-5">
            <div class="col-lg-6 col-md-8 col-sm-12 mx-auto">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (isset($_SESSION['productos']) && !empty($_SESSION['productos'])) { ?>
                            <?php foreach ($_SESSION['productos'] as $producto) { ?>
                                <tr>
                                    <td><?= $producto['nombre'];?></td>
                                    <td>$<?= $producto['precio'];?></td>
                                </tr>
                            <?php } ?>
                        <?php } else { ?>
                            <tr>
                                <td colspan="2" class="text-center"> <?="Inventario vacío";?> </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="d-flex justify-content-center mt-4">
            <a href="./cerrar_sesion.php" class="btn btn-danger btn-sm">Cerrar sesión</a>
        </div>
    </div>
</body>
</html>
