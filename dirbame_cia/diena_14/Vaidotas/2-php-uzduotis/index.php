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


    <?php

    $vardas = "Tadas";
    $pavarde = "Tadukas";

    // echo $vardas."<br />";
    //
    // echo $pavarde;

    $straipsnis = [];

    $straipsnis["antraste"]="BMW vel numuse kegli";

    $straipsnis["aprasymas"]="Siaubas kaip spaude..... nu jezusmarija......5 zuvo vietoj, 18 suzeistu";

    $straipsnis["data"]="2018-04-26";

    include('straipsnis.php');
    include('straipsnis.php');
    include('straipsnis.php');
    include('straipsnis.php');
    include('straipsnis.php');
    
    // foreach ($straipsnis as $vienoStalciausInfo) {
//   echo $vienoStalciausInfo."<br />";
//   // continue; prašoka vieną iteraciją
//   // break; nutrauktu po vieno ciklo!
//   }



    ?>





       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js">     </script>

        <!-- !!!  mano js visada zemiau -->
        <script src="main.js">  </script>
    </body>
</html>
