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

    $a = 100;
    function printA() {
        // echo "a:  $a <br>";  // ERROR - 'Undefined ' nezino kas tas $a
    }
    printA();

    // kaip
    function printA_22( $x ) {  // $x - local naujas issigalvotas kintamasis
        echo "a:  $x <br>"; //  100
        $x = 9999;
    }
    printA_22($a);

    echo "a: $a <br>"; // 100
    // echo "x: $x <br>"; //   ERROR - 'Undefined ' nezino kas tas $a

    function keiciamA() {
        global $a;   // pasakau, kad dirbsiu su $a globaliu kintamuoju
        echo "globalus a: $a <br>";   // 100
        $a = 9999;
        echo "globalus a pakeistas: $a <br>";  // 999
    }
    keiciamA();
    echo "globalus a pakeistas po f-ja: $a <br>";  // 9999

    function keiciuA_22() {
        echo "GLAOBALS[a]: " . $GLOBALS['a'] . "<br>";
         $GLOBALS['a'] = -50;
         echo "GLAOBALS[a]: " . $GLOBALS['a'] . "<br>";
    }
    keiciuA_22();
    echo "globalus a pakeistas po f-ja su GLAOBALS: $a <br>";  // -50

 ?>


       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js">     </script>

        <!-- !!!  mano js visada zemiau -->
        <script src="main.js">  </script>
    </body>
</html>
