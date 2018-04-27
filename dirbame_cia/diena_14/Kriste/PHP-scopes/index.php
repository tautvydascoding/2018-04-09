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

    $a = 100; // global

    // function printA() {
    //   echo "a: $a <br />"; // ERROR "undefined"- nes nezino, kas tas 'a'!!! PHP funkcija nepasiekia globaliu reiksmiu;
    // }
    // printA();


    function printA2($x) {
      echo "a: $x <br />";  // atspasudins 100;
      $x = 9999; // local;
    }
    printA2($a); // globalia reiksme turiu paduoti, kai iskvieciu funkcija;

    echo "a: $a <br />"; // atspausdins 100;
    // echo "x: $x <br />"; // ERROR "undefined"; nes uz funkcijos ribu;


    // kaip pakeisti global reiksme, funkcijos viduje;
    function keiciameA() {
      global $a; // issikvieciame, kad funkcijos viduje naudosime globalu 'a' reiksme;
      echo "issikvieciau globalu a: $a <br />";
      $a = 9999;
      echo "pakeiciau globalu a: $a <br />";
    }
    keiciameA();

    echo "koks dabar globalus A uz funkcijos? $a <br />"; // ir uz funkcijos ribu taip pat pakeista globali 'a' reiksme;

    // Kitas budas kaip pakeisti global reiksme funkcijos viduje;
    function keiciuA_22() {
      $GLOBALS['a'] = 22;
      echo "pakeiciau f-cijos viduje" . $GLOBALS[ 'a' ] . " <br />";
    }
    keiciuA_22();

    echo "pakeiciau f-cijos viduje- ar matos?" . $GLOBALS[ 'a' ] . " <br />"; // ir uz funkcijos ribu taip pat pakeista globali 'a' reiksme;

 ?>


       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js">     </script>

        <!-- !!!  mano js visada zemiau -->
        <script src="main.js">  </script>
    </body>
</html>
