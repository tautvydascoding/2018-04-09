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

 $vardas = 'Tomas';
 $pavarde = 'Tomauskis';

 $straipsnis = [];
 $straipsnis["antraste"] = 'Brangsta butai, Kaunas pleciasi';
 $straipsnis["aprasymas"] = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
 $straipsnis["data"] = '2018/04/26';

include('straipsnis.php');
include('straipsnis.php');
include('straipsnis.php');
include('straipsnis.php');

 // echo  $straipsnis['aprasymas'];

 // foreach ($straipsnis as   $vienoStalciausTurinys) {
 //     echo  $vienoStalciausTurinys . "<br>";
 // }





 ?>


       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js">     </script>

        <!-- !!!  mano js visada zemiau -->
        <script src="main.js">  </script>
    </body>
</html>
