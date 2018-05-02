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
            <h1> Gydytoju sarasas 2018 m.</h1>


        <?php

            //
            include_once('doctors_functions_DB.php');





            $gydytojas = getDoctor(1); // grista masyvas su id, name , lname
            include( 'template_gydytojas.php');

            $gydytojas = getDoctor(3); // grista masyvas su id, name , lname
            include( 'template_gydytojas.php');

            $gydytojas = getDoctor(2); // grista masyvas su id, name , lname
            include( 'template_gydytojas.php');

            $gydytojas = getDoctor(4); // grista masyvas su id, name , lname
            include( 'template_gydytojas.php');

            // print_r( $gyd ); //test


            // // uzduotis2: atspausdinti daktara i <p> </p>, kurio id yra 7
            // // uzduotis3: visus daktarus "ul li" , kaip list item
            // // uzduotis4: patobulinti uzduotis3,
            //     kad paspaudus ant daktaro vardo/pavardes   atidarytu doctor.php faila
            // // uzduotis5: patobulinti uzduotis4,
            //     kad   doctor.php faile isvestu info apie - paspausta gydytoja
            //     HINT: a linke, prideti ?kintamasis=...   ir docotr.php su $_GET pasiimti kintamaji



         ?>


       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js">     </script>

        <!-- !!!  mano js visada zemiau -->
        <script src="main.js">  </script>
    </body>
</html>
