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
            <h1> Gydytoju sarasas 2018 m.  </h1>



<?php

  include_once('doctors_functions_DB.php');

  $gyd = getDoctor(1);
  // print_r($gyd); //pasitikrinome ar veikia;

  // echo "<h2> ". $gyd['Name'] . " </h2>"; //arba lengviau html'e rasyti ir iterpti isvedima su php;

 ?>

<!-- galima sunkiau padaryti, kad h2 viduje rasyti su echo isvedima daktaro vardo ir tuos numeris1,2 ir t.t. irgi sukoduoti, o ne ranka irasyti-->

<h2>
  <a href="template-gydytojas.php?numeris=1">
    <!-- ?numeris=1 atsiras GET masyve -->
      Tim
  </a>
</h2>

<h2>
  <a href="template-gydytojas.php?numeris=2">
    <!-- ?numeris=1 atsiras GET masyve -->
      Paulius
  </a>
</h2>

<h2>
  <a href="template-gydytojas.php?numeris=3">
    <!-- ?numeris=1 atsiras GET masyve -->
      Ona
  </a>
</h2>

<h2>
  <a href="template-gydytojas.php?numeris=4">
    <!-- ?numeris=1 atsiras GET masyve -->
      Lita
  </a>
</h2>











       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js">     </script>

        <!-- !!!  mano js visada zemiau -->
        <script src="main.js">  </script>
    </body>
</html>
