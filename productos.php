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

    ?>

    <div class="container">
        <div class="row">
            <?php
            //$registro = mostrarProductos($conexion);
            $row = mostrarProductos($conexion);
            foreach ($row as $key => $value) :
            ?>
                <div class="col-md-4 mt-5">
                    <div class="card" style="width: 18rem;">
                        <a href="mostrarProducto.php?id=<?php echo $value->id ?>"><img src="img/productos/<?php echo $value->imagen; ?>" class="card-img-top" alt="imagen"></a>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $value->nombre; ?></h5>
                            <p class="card-text"><?php echo $value->precio; ?></p>
                        </div>
                    </div>
                </div>
            <?php
            endforeach;
            ?>
        </div>
    </div>

    <script src="css/bootstrap-5.0.0/js/bootstrap.bundle.js"></script>
</body>

</html>