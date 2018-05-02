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
            <h1> Informacija apie gydytoja </h1>


<?php

include_once('doctors_functions_DB.php');

// print_r($_GET); // test

$nr = $_GET['numeris']; //numeris yra masyvo, kuri sukure GET'as pavadinimas. Cia tuo metu, kai prie url adreso per ? zenkla suraseme kintamuosius numeris=1, numeris=2 ir t.t.;

// echo $nr; // test

$gydytojas = getDoctor( $nr );
// print_r($gydytojas); // test

 ?>


  <div class="container">

    <div class="row bg-warning">
      <div class="col-md">
        Nr: <?php echo $gydytojas['Id']; ?>
      </div>
    </div>


    <div class="row">
      <div class="col-md">
        <?php echo $gydytojas['Name'] . " " . $gydytojas['Lname']; ?>
      </div>
    </div>

  <!-- uzdaro containeri -->
  </div>











       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js">     </script>

        <!-- !!!  mano js visada zemiau -->
        <script src="main.js">  </script>
    </body>
</html>
