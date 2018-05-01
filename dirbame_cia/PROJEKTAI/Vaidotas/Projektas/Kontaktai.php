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

      <div class="container mb-5">


        <wrapper class="row bg-info aukstis-400">

          <form class="col-md bg-danger mr-2 mb-2" action="index.html" method="post">

            Vardas<br />
            Pavarde<br />
            Pasto adresas <br />
            Nerta/Megzta/Siuta <br />
            Textarea <br>
            <button type="button" name="button"> SUBMIT</button>

          </form>
          <aside class="col-md-6">
            <div class="row">
              <nav class="col-md-12 bg-warning mb-2">
                <h2>Mano draugai: <hr /></h2>
                <ul>
                  <li> Siūlų dama </li>
                  <li> Siūlo galas </li>
                  <li> </li>
                </ul>

              </nav>
            </div>
            <div class="row">
              <figure class="col-md-12 bg-danger" >
                <h2> Etyngos guolis Kaune:</h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d487.45461162299756!2d23.89884807823993!3d54.91506729637681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46e718afc982d467%3A0x4fd43645ecdd8566!2sVarni%C5%B3+g.+37%2C+Kaunas+48416!5e1!3m2!1sen!2slt!4v1525167410338" width="360" height="400" frameborder="1" style="border:12" allowfullscreen></iframe>
              </figure>

            </div>

          </aside>



        </wrapper>





     </div> <!--uzdarau wrapper-->

        <?php include("footeris.php") ?>
        <script src="main.js">  </script>
    </body>
</html>
