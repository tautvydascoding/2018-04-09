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



    <body>

        <?php include('headeris2.php') ?>

<div class="container darbai-konteineris mb-5">
          <div class="row">

            <nav class="col-md-2 bg-danger navigacijos-lenta mr-3">
              <ul>
                <li>Nerta</li>
                <li>Megzta</li>
                <li>Siuta</li>
              </ul>
              <button type="button" name="navigacijos-meniu" class="navigacijos-myg"><i class="fa fa-arrow-circle-o-right"></i></button>
            </nav>



              <article class="col-md-9 bg-info mb-5" id="galerija">
                <div class="row" id="nerta">
                  <div class="col-md-12 mt-5 bg-warning">
                    vieta nertiems paveikslams
                    <div class="fotorama" data-nav="thumbs" >
                          <img src="http://s.fotorama.io/1.jpg" data-caption="Kuprinyte">
                          <img src="http://s.fotorama.io/2.jpg" data-caption="Salikas">
                    </div>
                  </div>
                </div>
                <div class="row" id="megzta">
                  <div class="col-md-12 mt-5 bg-light">
                    vieta megztiems paveikslams
                    <div class="fotorama" data-nav="thumbs" data-glimpse="10%">
                          <img src="http://s.fotorama.io/1.jpg">
                          <img src="http://s.fotorama.io/2.jpg">
                          <img src="http://s.fotorama.io/3.jpg">
                          <img src="http://s.fotorama.io/4.jpg">
                    </div>
                  </div>
                </div>
                <div class="row" id="siuta">
                  <div class="col-md-12 mt-5 bg-success">
                    vieta siutiems paveikslams
                    <div class="fotorama" data-nav="thumbs">
                          <img src="http://s.fotorama.io/1.jpg">
                          <img src="http://s.fotorama.io/2.jpg">
                    </div>
                  </div>
                </div>

              </article> <!--uzdarau galerija-->









          </div>
</div>





        <?php include("footeris.php") ?>
        <script type="text/javascript" src="libs/jquery-3.2.1.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
        <script src="main.js">  </script>
    </body>
</html>
