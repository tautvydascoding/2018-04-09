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

            //
            include_once('doctors_functions_DB.php');



            $gydytojas = getDoctor(1);
            include('gydytojas.php'); // grista masyvas su id, name , lname
            $gydytojas = getDoctor(2);
            include('gydytojas.php');
            $gydytojas = getDoctor(3);
            include('gydytojas.php');
            $gydytojas = getDoctor(4);
            include('gydytojas.php');
            // print_r( $gyd ); //test

            //arba

            for ($i=1; $i <6 ; $i++) {
              $gydytojas = getDoctor($i);
              include('gydytojas.php');

            }



         ?>


       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js">     </script>

        <!-- !!!  mano js visada zemiau -->
        <script src="main.js">  </script>
    </body>
</html>
