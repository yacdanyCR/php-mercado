<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap-5.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-icons-1.4.1/bootstrap-icons.css">
    <title>Productos</title>
</head>

<body>
    <?php
    session_start();
    include_once 'layouts/header.php';
    include_once 'db/config.php';
    include_once 'php/functions.php';

    if (isset($_GET['id'])) {
        $row = mostrarProductoSeleccionado($conexion, $_GET['id']);
    } else {
        header('Location:productos.php');
    }
    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-6 txt-center mt-5">
                <?php
                foreach ($row as $key => $value) :
                ?>
                    <div class="card" style="width: 18rem;">
                        <img src="img/productos/<?php echo $value->imagen; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $value->nombre; ?></h5>
                            <!--  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                       <a href="#" class="btn btn-primary">Comprar</a>-->
                        </div>
                    </div>
            </div>
            <div class="col-md-4 txt-center">
                <h1 class="text-justify">Información de Vendedor</h1>
                <span>Nombre: <?php echo $value->nombre;?></span><br>
                <span>Telefono: <?php echo $value->telefono;?></span><br>
                <span>Dirección: <?php echo $value->direccion;?></span><br>
                <span></span>
            </div>
        <?php
                endforeach;
        ?>
        </div>
    </div>

    <script src="css/bootstrap-5.0.0/js/bootstrap.bundle.js"></script>
</body>

</html>