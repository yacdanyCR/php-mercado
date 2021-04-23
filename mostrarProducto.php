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

        if(isset($_GET['id'])){
            
        }else{
            header('Location:productos.php');
        }
    ?>

    <div class="container">
        <div class="row">
            <div class="col">

            </div>
        </div>
    </div>

    <script src="css/bootstrap-5.0.0/js/bootstrap.bundle.js"></script>
</body>
</html>