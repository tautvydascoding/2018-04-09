<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Namai</title>
        <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.0/normalize.css">
        <link rel="stylesheet" href="libs/bootstrap4/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>


        <!-- !!! mano CSS failas visada pats zemiausias -->
        <link rel="stylesheet" href="css/main.css">
    </head>



    <body>
<?php include("headeris2.php") ?>

<main class="container main">

        <div class="sl">
          <?php include_once('php_kodas.php');
          $viskasMegzta = getKaruseleMegzta();

          while ( $vienasMegzta = mysqli_fetch_assoc($viskasMegzta)  ) :
            ?>


          <div class="sl__slide">
            <img src="<?php echo $vienasMegzta['img_src'] ?>" alt="<?php echo $vienasMegzta['alt_text'] ?>" class="sl__img">
            <a href="darbai3.php#<?php echo $vienasMegzta['cat'] ?>">
              <div class="sl__text">
              <h3 class="sl__zag"> <?php echo $vienasMegzta['sub_cat'] ?></h3>
              <p class="slide__sec"> <?php echo $vienasMegzta['description'] ?></p>
              </div>
            </a> <!-- slide text-->
          </div><!-- slide close-->


          <?php  endwhile;  ?>
        </div> <!--slider close-->
</main>

<main class="container main mt-3">

        <div class="sl">

          <?php //include_once('php_kodas.php');
          $viskasNerta = getKaruseleNerta();

          while ( $vienasNerta = mysqli_fetch_assoc($viskasNerta)  ) :
            ?>

          <div class="sl__slide">
            <img src="<?php echo $vienasNerta['img_src'] ?>" alt="<?php echo $vienasNerta['alt_text'] ?>" class="sl__img">
            <a href="darbai3.php#<?php echo $vienasNerta['cat'] ?>">
              <div class="sl__text">
              <h3 class="sl__zag"> <?php echo $vienasNerta['sub_cat'] ?></h3>
              <p class="slide__sec"> <?php echo $vienasNerta['description'] ?></p>
              </div>
            </a> <!-- slide text-->
          </div><!-- slide close-->

    <?php  endwhile;  ?>


  </div> <!--slider of Nerta close-->
</main>

<main class="container main mb-5">

        <div class="sl mb-5">
          <?php
          $viskasSiuta = getKaruseleSiuta();

          while ( $vienasSiuta = mysqli_fetch_assoc($viskasSiuta)  ) :
            ?>


          <div class="sl__slide">
            <img src="<?php echo $vienasSiuta['img_src'] ?>" alt="<?php echo $vienasSiuta['alt_text'] ?>" class="sl__img">
            <a href="darbai3.php#<?php echo $vienasSiuta['cat'] ?>">
              <div class="sl__text">
              <h3 class="sl__zag"> <?php echo $vienasSiuta['sub_cat'] ?></h3>
              <p class="slide__sec"> <?php echo $vienasSiuta['description'] ?></p>
              </div>
            </a> <!-- slide text-->
          </div><!-- slide close-->


          <?php  endwhile;  ?>

        </div> <!--slider close-->
</main>



<?php include("footeris.php") ?>
        <script type="text/javascript" src="libs/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="slick/slick.min.js"></script>
        <script src="main.js">  </script>
    </body>
</html>
