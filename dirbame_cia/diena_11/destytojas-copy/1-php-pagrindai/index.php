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
        <h1> Isijunk console </h1>

        <?php

            // komentaras
            /*

            */
            $vardas = "Tomas";

            echo "Labas <br>";
            echo $vardas;
            // . - jungia string'us
            echo "Viso "  .  $vardas . "Gero <br />";
            $x = " Laba diena " . " Povilai ";

            // dvigubose kabutese galima naudoti kintamuosius !isskyrus matricas
            echo " Sodyba  $vardas  <br />"; // Sodyba  Tomas
            echo 'Sodyba  $vardas  <br />';  // Sodyba  $vardas

            function printVardas() {
                $y = 'kintamasis';
                $z = 'GOGO';
                $g = 0.0456789;
                echo "Tekstas <br>";
                print( "tekstas $y su print <br>" );
                printf( "tekstas %s su %s  skaicius %.2f printf", $y, $z, $g );  // %s - string
            }
            printVardas();

            
         ?>


       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js">     </script>

        <!-- !!!  mano js visada zemiau -->
        <script src="main.js">  </script>
    </body>
</html>
