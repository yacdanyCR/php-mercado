<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap-5.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-icons-1.4.1/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Inicio</title>
</head>

<body>
    <?php
    session_start();
    include_once 'db/config.php';
    ?>

    <header>
        <?php
        include_once 'layouts/header.php';
        ?>
    </header>

    <div class="main">
        <div class="row">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner img-carousel">
                    <div class="carousel-item active">
                        <img src="img/carousel/RUYA-NEW-3-1080x675.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/carousel/Galerias-nuevos-restaurantes-2019-CNN-1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/carousel/SpiceMarket_cDanielAlvarez.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4">
                <i class="bi bi-bucket"></i>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis sit porro, odio harum, at dolores molestias labore ut distinctio quo ipsa? Repellat, magnam vel! Ab excepturi eligendi minus non dolorum.
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos fugit voluptates asperiores rem assumenda at molestiae dicta nam inventore, repellendus blanditiis? Commodi dolorum eveniet cumque quaerat illum vitae reprehenderit quia!
                </p>
            </div>
            <div class="col-md-4">
                <i class="bi bi-bucket"></i>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam nulla impedit, dolorum in corporis incidunt veritatis quasi nihil provident. Numquam laboriosam debitis, iste eum accusantium ea! Soluta quasi natus facilis.
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi quis excepturi culpa est omnis sint cupiditate, dolorum molestias quod possimus natus hic iste corrupti tempora vero repellendus, libero provident esse.
                </p>
            </div>
            <div class="col-md-4">
                <i class="bi bi-bucket"></i>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique at esse perferendis quos quidem? Natus voluptate obcaecati fugiat minima cupiditate reprehenderit tenetur perferendis aliquam, fugit eius vel veritatis amet ullam!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel ducimus tenetur reprehenderit totam modi maxime explicabo quos doloremque nihil quibusdam, earum asperiores maiores nulla vitae laboriosam! Nostrum consequatur adipisci fugit.
                </p>
            </div>
        </div>
        <footer>
            <div class="row bg-dark">
                <div class="col-md-12 text-light footer">
                    <p style="color: white;">
                        <script type="text/javascript">
                            copyright = new Date();

                            update = copyright.getFullYear();

                            document.write("© 2018 - " + update + " " + "Mi web");
                        </script>
                    </p>
                </div>
            </div>
        </footer>
    </div>


    <script src="css/bootstrap-5.0.0/js/bootstrap.bundle.js"></script>
</body>

</html>