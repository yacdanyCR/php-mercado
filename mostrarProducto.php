<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap-5.0.0/css/bootstrap.min.css">
    <title>Productos</title>
</head>

<body>
    <?php
    include_once 'layouts/header.php';
    include_once 'db/config.php';
    include_once 'php/functions.php';

    if (isset($_GET['id'])) {
        $row=mostrarProductoSeleccionado($conexion,$_GET['id']);
    } else {
        header('Location:productos.php');
    }
    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12 txt-center mt-5">
            <?php
                foreach ($row as $key => $value) :
            ?>
                <div class="card" style="width: 18rem;">
                    <img src="img/productos/<?php echo $value->imagen;?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $value->nombre;?></h5>
                      <!--  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                       --> <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
                <?php
                    endforeach;
                ?>
            </div>
        </div>
    </div>

    <script src="css/bootstrap-5.0.0/js/bootstrap.bundle.js"></script>
</body>

</html>