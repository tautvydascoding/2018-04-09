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





    <body class="container">
        <div class="row">
          <main class="col-6">




            <h1 class="mb-5 scr"> Isijunk forma  </h1>

            <form class="bg-success ml-3 pl-3" action="registracija.php" method="get" target="_blank">
                Vardas: <br>
              <input type="text"  name="vardas" value="" placeholder="Iveskite varda:" required>
                <br>
                Pavarde: <br>
              <input type="text" name="pavarde" placeholder="Iveskite Pavarde:" required>
                <br>
                Telefono nr: <br>
              <input type="tel" name="telefonas" placeholder="Jusu telefono nr:" required>
                <br>
              <input type="submit" name="submitas" value="Submit">
              <!-- arba -->
              <button type="submit" name="submit2"> Registruotis </button>

            </form>
          </main>
      </div>


       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js">     </script>

        <!-- !!!  mano js visada zemiau -->
        <script src="main.js">  </script>
    </body>
</html>
