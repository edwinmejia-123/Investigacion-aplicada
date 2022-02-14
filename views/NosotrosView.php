<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link href="css/album.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/estilo_index.css">
    <link rel="stylesheet" href="css/style-slider.css">
    <link rel="stylesheet" href="css/fonts.css">
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/font-icon.js"></script>
    <title>Clothing Store | Nosotros</title>
</head>
<body>
<?php
      require_once('views/menuView.php');
    ?>

    <div class="container py-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb separador">
              <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
              <li class="breadcrumb-item active" aria-current="page">Nosotros</li>
            </ol>
        </nav>

        <div class="row featurette mt-5">
            <div class="col-md-7">
                <h2 class="titulo-historia"><span><i class="fas fa-book"></i></span> Historia</h2>
                <p class="text-justify">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla consectetur, quasi qui corporis quae praesentium 
                    eaque! Sunt doloremque corporis exercitationem consequatur eos, quidem perspiciatis aut cumque laboriosam 
                    perferendis odio repellat.
                    <br><br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque nobis fuga distinctio vel odit, temporibus nemo 
                    doloribus! Suscipit tempore et iste, itaque labore, atque nihil provident modi facilis quas est.
                </p>
            </div>
            <div class="col-md-5 mt-5 text-center tarjeta-historia">
                <img src="img/about-02.jpg" class="bd-placeholder-img rounded-circle img-tarjeta-historia" alt="">
            </div>
        </div>
        <hr class="my-4" />

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="titulo-mision"><span><i class="far fa-lightbulb"></i></span> Misión</h2>
                <p class="text-justify">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla consectetur, quasi qui corporis quae praesentium 
                    eaque! Sunt doloremque corporis exercitationem consequatur eos, quidem perspiciatis aut cumque laboriosam 
                    perferendis odio repellat.
                    <br><br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque nobis fuga distinctio vel odit, temporibus nemo 
                    doloribus! Suscipit tempore et iste, itaque labore, atque nihil provident modi facilis quas est.
                </p>
            </div>
            <div class="col-md-5 order-md-1 mt-5 text-center">
                <img src="img/about-02.jpg" class="bd-placeholder-img rounded-circle img-tarjeta-historia" alt=""
          />
            </div>
        </div>
    </div>

    <?php
      require_once('views/footerView.php');
    ?>


</body>
</html>