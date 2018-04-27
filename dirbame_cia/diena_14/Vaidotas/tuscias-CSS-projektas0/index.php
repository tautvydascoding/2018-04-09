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

      function keiciaA(){
      //  echo "a:  $a <br />"; // error - nezino kas tas $a, nes yra tik funkcijos scope;
      }

      keiciaA();

      function printA($x){
        echo "a:  $x <br />"; // naujas local išsigalvotas kintamasis;
        $x = 9999;
      }

      printA($x); // error undefined
      printA($a); // 100

      function keiciamA(){
        global $a; // pasakau, kad dirbsiu su a;
        echo "globalus a: $a <br />";
        $a = 9999; // keiciu a;
        echo "globalus pakeistas a: $a <br />";
      }

      keiciamA();
      echo "globalus pakeistas a: $a <br />";


      function keiciamA_2(){
        echo "GLOBALS A: ".$GLOBALS['a']."<br />"; // spausdinu globalu a is atminties, GLOBALS turi but all caps;
        $GLOBALS['a'] = -50;
        echo "GLOBALS A pakeistas: ".$GLOBALS['a']."<br />";
      }
      keiciamA_2();
      echo "globalus pakeistas a po funkcija su GLOBALS: $a <br />";


     ?>
       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js">     </script>

        <!-- !!!  mano js visada zemiau -->
        <script src="main.js">  </script>
    </body>
</html>
