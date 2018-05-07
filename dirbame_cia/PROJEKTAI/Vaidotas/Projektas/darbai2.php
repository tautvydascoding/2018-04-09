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


        <main class="col-sm-9 col-8 mx-auto"> <!--keiciu main i div-->
              <div id="megzta" class="row">

                <div class="col-sm-12 mt-5 bg-light rounded">
                  <h2>Megztos gėrybės</h2>
                  <div class="fotorama" data-nav="thumbs" >
                        <img src="Images/megzta/1.jpg" data-caption="Skraistė">
                        <img src="Images/megzta/2.jpg" data-caption="Šlepetės iki kauliuko">
                        <img src="Images/megzta/3.jpg" data-caption="Tapukai-mašiniukai">
                        <img src="Images/megzta/4.jpg" data-caption="Šalikas ir pirštinės">
                        <img src="Images/megzta/5.jpg" data-caption="Pirštinės transformeriai">
                        <img src="Images/megzta/6.jpg" data-caption="Komplektas žiemai">
                  </div>
                </div>
              </div> <!-- uzdarau fotoramos megzta row-->

              <div id="nerta" class="row">
                <div class="col-sm-12 mt-5 bg-light rounded">
                  <h2>Nertos gėrybės</h2>
                  <div class="fotorama" data-nav="thumbs">
                        <img src="Images/nerta/1.jpg" data-caption="Drąsi kuprinė">
                        <img src="Images/nerta/2.jpg" data-caption="Krepšeliai">
                        <img src="Images/nerta/3.jpg" data-caption="Rožinė rankinė">
                        <img src="Images/nerta/4.jpg" data-caption="Delninukė">
                        <img src="Images/nerta/5.jpg" data-caption="Spalvotosios šlepetės">
                        <img src="Images/nerta/6.jpg" data-caption="Krepšeliai niekučiams">

                  </div>
                </div>
            </div>  <!-- uzdarau fotoramos nerta row-->

            <div id="siuta" class="row">
              <div class="col-sm-12 mt-5 bg-light rounded">
                <h2>Siūtos gėrybės</h2>
                <div class="fotorama" data-nav="thumbs">
                      <img src="Images/siuta/1.jpg" data-caption="Sėdmaišiai 1">
                      <img src="Images/siuta/2.jpg" data-caption="Sėdmaišiai 2">
                      <img src="Images/siuta/3.jpg" data-caption="Sėdmaišiai 3">
                      <img src="Images/siuta/4.jpg" data-caption="Vasariškiausios suknelės">

                </div>
              </div>
          </div>  <!-- uzdarau fotoramos row-->



        </main>
        </div>
      </div>
















        <?php include("footeris.php") ?>
        <script type="text/javascript" src="libs/jquery-3.2.1.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="main.js">  </script>
    </body>
</html>
