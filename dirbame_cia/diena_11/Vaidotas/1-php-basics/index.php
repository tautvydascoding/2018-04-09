<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP</title>
        <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.0/normalize.css">
        <link rel="stylesheet" href="libs/bootstrap4/css/bootstrap.css">

        <!-- !!! mano CSS failas visada pats zemiausias -->
        <link rel="stylesheet" href="css/master.css">
    </head>



    <body>
            <h1> Isijunk console </h1>

            /?<?php
          // komentaras
          /*

          */


          $vardas = "Tomas";
          echo "labas <br>";
          echo $vardas."<br />";
          // jungia stringus su . o ne su +
          echo "viso " . $vardas . "Gero <br />";
          $x = " Laba diena, " . " Povilai ";
          echo "Sodyba priklause $vardas <br />";

          function printVardas() {
            $y = 'kintamasis';
            $z = "GOGO";
            echo $vardas."<br />";
            print("tekstas su print <br />");
            printf("tekstas %s su %s printif", $y, $z );
          }

          printVardas();


            ?>






       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js">     </script>

        <!-- !!!  mano js visada zemiau -->
        <script src="main.js">  </script>
    </body>
</html>
