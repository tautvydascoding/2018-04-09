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

        <!-- !!! mano CSS failas visada pats zemiausias -->
        <link rel="stylesheet" href="css/main.css">
    </head>



    <body>

        <?php include('headeris2.php') ?>
<div class="container">
          <div class="row">
            <nav class="col-md-2 aukstis-400 bg-danger navigacijos-lenta mr-3">
              <ul>
                <ul>Nerta
                  <li>Rankines</li>
                  <li>Kuprines</li>
                  <li>Delninukes</li>
                </ul>
                <ul>Megzta
                  <li>Megztiniai</li>
                  <li>Liemenes</li>
                  <li>Salikai ir kiti aksesuarai</li>
                </ul>
                <ul>Siuta
                  <li>Sedmaisiai</li>
                  <li>Sukneles</li>
                </ul>
              </ul>
              <button type="button" name="navigacijos-meniu" class="navigacijos-myg"><i class="fa fa-arrow-circle-o-right"></i></button>
            </nav>
              <article class="col-md-9 bg-info aukstis-400" id="galerija">
                <div class="row" id="nerta">
                  <div class="col-md-12 mt-5 bg-warning">
                    vieta nertiems paveikslams
                  </div>
                </div>
                <div class="row" id="megzta">
                  <div class="col-md-12 mt-5 bg-light">
                    vieta megztiems paveikslams
                  </div>
                </div>
                <div class="row" id="megzta">
                  <div class="col-md-12 mt-5 bg-success">
                    vieta siutiems paveikslams
                  </div>
                </div>

              </article>









          </div>
</div>





        <?php include("footeris.php") ?>
        <script src="main.js">  </script>
    </body>
</html>
