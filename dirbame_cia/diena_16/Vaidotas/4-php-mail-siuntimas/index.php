<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.0/normalize.css">
        <link rel="stylesheet" href="libs/bootstrap4/css/bootstrap.css">

        <!-- !!! mano CSS failas visada pats zemiausias -->
        <link rel="stylesheet" href="css/master.css">
    </head>



    <body>
            <h1> Isijunk   </h1>


      <div class="container">
        <div class="row">
          <div class="col-md-3 bg-light border border-success">

            <form class="" action="email-siuntimas.php" method="post">
              <label for="vardas"> Jusu vardas</label><br>
              <input type="text" name="vardas" value="" required><br>

              <label for="klausimas"> Jusu klausimas</label><br>
              <textarea name="klausimas" rows="8" cols="20" required></textarea><br>

              <label for="pastas"> Jusu El.pastas </label><br>
              <input type="email" name="pastas" value="" required><br><br>

              <input type="submit" name="" value="Klausti">

            </form>






          </div>
        </div>
      </div>



       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js">     </script>

        <!-- !!!  mano js visada zemiau -->
        <script src="main.js">  </script>
    </body>
</html>
