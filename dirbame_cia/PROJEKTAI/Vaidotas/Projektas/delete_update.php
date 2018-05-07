<?php
  session_start();

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: prisijungimas.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: prisijungimas.php");
  }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Duomenų pakeitimas</title>
        <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.0/normalize.css">
        <link rel="stylesheet" href="libs/bootstrap4/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- !!! mano CSS failas visada pats zemiausias -->
        <link rel="stylesheet" href="css/main.css">
    </head>

    <body>
      <?php include('headeris2.php') ?>
        <main class="container">
          <div class="row">
            <article class="col-md-5 bg-light rounded mx-auto">
              <h2>Atlikti Pakeitimai:</h2><hr>

              <?php include_once("php_kodas.php");
              if ($_GET) {
                $ID = $_GET['numeris'];
                deleteDraugas( $ID );

                echo "<h3> Istrynem drauga nr: $ID </h3><br />";
              }
                ?>


               <?php include_once("php_kodas.php");
               if ($_POST) {

                 $draugoId = $_POST['id'];
                 $draugoName = $_POST['name'];
                 $draugoLink = $_POST['link'];
                 $draugoDesc = $_POST['description'];

                 updateDraugas2($draugoId, $draugoLink, $draugoName, $draugoDesc);
                 echo "<h3> Pakeitėm draugo:  $draugoId  duomenis sėkmingai </h3><br />";

               }






            echo   "</br/>";
            echo "<a class='btn btn-success' href='paslaptis.php'>Grįžti atgal</a>";
                ?>



                </article>



        </main>




  <?php include("footeris.php") ?>
    </body>

    <script type="text/javascript" src="libs/jquery-3.2.1.min.js"></script>
    <script src="main.js">  </script>
</body>
</html>
