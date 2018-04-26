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


<?php
    $ = 100;
    function printA() {
      echo "a: $a <br>"; // ERROR - NEZINO KAS TAS $a
    }
    printA();

    // kaip
    function printA_22 ($x) {
      echo "a: $x <br>"; // 100
      $x = 9999
    }
    printA_22($a);
    echo "a: $a <br>"; // ERROR - undefined

    function keiciamaA(){
      global $a; $a;
      echo "globalus a paketas: $a <br>";  // 9999

    }
    keiciamaA();
    echo "globalus a pakeistas po f-ja: $a <br>"; // 9999

    function keiciuA_22() {
      echo "GLOBAL[a] ". $globals['a']; <br>
    }
?>



       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js">     </script>

        <!-- !!!  mano js visada zemiau -->
        <script src="main.js">  </script>
    </body>
</html>
