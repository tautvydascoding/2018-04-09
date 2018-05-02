<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Darbai</title>
        <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.0/normalize.css">
        <link rel="stylesheet" href="libs/bootstrap4/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
        <!-- !!! mano CSS failas visada pats zemiausias -->
        <link rel="stylesheet" href="css/main.css">
    </head>



    <body data-spy="scroll" data-target="#myScrollspy" data-offset="1">

        <?php include('headeris2.php') ?>

    <div class="container mb-5">
      <div class="row">
        <nav class="col-sm-3 col-4" id="myScrollspy">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link  btn-secondary mb-2" href="#megzta">Megztos gėrybės</a>
            </li>
            <li class="nav-item">
              <a class="nav-link btn-secondary mb-2" href="#nerta">Nertos gėrybės</a>
            </li>
            <li class="nav-item">
              <a class="nav-link btn-secondary mb-2" href="#siuta">Siūtos gėrybės</a>
            </li>
          </ul>
        </nav>


        <div class="col-sm-9 col-8">
              <div id="megzta" class="bg-success row">

                <div class="col-sm-12 mt-5 bg-warning">
                  <h2>Megztos gėrybės</h2>
                  <div class="fotorama" data-nav="thumbs" >
                        <img src="http://s.fotorama.io/1.jpg" data-caption="Kuprinyte">
                        <img src="http://s.fotorama.io/2.jpg" data-caption="Salikas">
                  </div>
                </div>
              </div>

              <div id="nerta" class="bg-warning row">
                <div class="col-sm-12 mt-5 bg-warning">
                  <h2>Nertos gėrybės</h2>
                  <div class="fotorama" data-nav="thumbs" >
                        <img src="http://s.fotorama.io/1.jpg" data-caption="Kuprinyte">
                        <img src="http://s.fotorama.io/2.jpg" data-caption="Salikas">
                        <img src="http://s.fotorama.io/4.jpg" data-caption="Preke">
                        <img src="http://s.fotorama.io/5.jpg" data-caption="Pirstines">
                  </div>
                </div>
            </div>

            <div id="siuta" class="bg-info row">
              <div class="col-sm-12 mt-5 bg-warning">
                <h2>Siūtos gėrybės</h2>
                <div class="fotorama" data-nav="thumbs" >
                      <img src="http://s.fotorama.io/1.jpg" data-caption="Kuprinyte">
                      <img src="http://s.fotorama.io/2.jpg" data-caption="Salikas">
                      <img src="http://s.fotorama.io/4.jpg" data-caption="Preke">
                      <img src="http://s.fotorama.io/5.jpg" data-caption="Pirstines">
                </div>
              </div>
          </div>



          </div>
        </div>
      </div>
















        <?php include("footeris.php") ?>
        <script type="text/javascript" src="libs/jquery-3.2.1.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="main.js">  </script>
    </body>
</html>
