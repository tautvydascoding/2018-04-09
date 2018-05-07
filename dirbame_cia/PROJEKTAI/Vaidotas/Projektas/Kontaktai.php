<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kontaktai</title>
        <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.0/normalize.css">
        <link rel="stylesheet" href="libs/bootstrap4/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- !!! mano CSS failas visada pats zemiausias -->
        <link rel="stylesheet" href="css/main.css">
    </head>



    <body>
      <?php include('headeris2.php') ?>

      <div class="container mb-5 mt-5">


        <wrapper class="row mt-5">

          <form class="col-md-6 mr-2 mb-2 aukstis-600" id="forma" target="_blank" action="sveikiname.php" method="post">

            <h2> Nebijokit klausti!<hr /></h2>

            <h4>Vardas:</h4>
            <input type="text" name="vardas" value="" placeholder="Vardenis" required>
            <br>
            <h4>Pavardė:</h4>
            <input type="text" name="pavarde" value="" placeholder="Pavardenis" required>
            <br>
            <h4>Jūsų el. paštas:</h4>
            <input type="email" name="elpastas" value="" placeholder="Mau@mau.lt" required>
            <br>
            <h4>Jūsų Telefono nr.</h4>
            <input type="tel" name="tel" value="" placeholder="8 6-- -----">
            <br>
            <h4>Jūsų užklausa:</h4>
            <textarea name="komentaras" value="" placeholder="Kuo galėčiau jus nudžiuginti?" rows="4" cols="20"></textarea> <br>
            <button type="submit" class="btn btn-secondary mt-2" name="button"> Klausti</button>
            <input type="reset" class="btn btn-secondary mt-2" name="" value="Iš naujo">

          </form>

          <aside class="col-md-4 mb-5">
            <div class="row">
              <nav class="col-md-12" id="draugai">
                <h2>Mano draugai: <hr /></h2>
                <ul>
                  <li> <a href="https://siuludama.lt/"> Siūlų dama  </a> </li>
                  <li> <a href="http://www.siulogalas.lt/en/"> Siūlo galas  </a> </li>
                  <li> <a href="http://audiniai.com"> Šilko tekstilė </a></li>
                </ul>

              </nav>
            </div>

            <div class="row">
              <figure class="col-md-12 mb-5" id="mepas" >
                <h2> Etyngos guolis Kaune:</h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d487.45461162299756!2d23.89884807823993!3d54.91506729637681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46e718afc982d467%3A0x4fd43645ecdd8566!2sVarni%C5%B3+g.+37%2C+Kaunas+48416!5e1!3m2!1sen!2slt!4v1525167410338" width="300" height="300" frameborder="1" style="border:1" allowfullscreen class="mx-auto"></iframe>
              </figure>
            </div> <!--uždarau figūros row-->

          </aside>



        </wrapper>





     </div> <!--uzdarau wrapper-->

        <?php include("footeris.php") ?>
        <script type="text/javascript" src="libs/jquery-3.2.1.min.js"></script>
        <script src="main.js">  </script>
    </body>
</html>
