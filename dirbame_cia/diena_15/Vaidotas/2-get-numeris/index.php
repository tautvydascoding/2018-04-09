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

        include_once("doctors_functions_DB.php");
        $gyd = getDoctor(1);
        // print_r( $gyd );

 ?>
            <h2> <!-- ?numeris1 atsiras masyve-->
               <a href="template_gydytojas.php?numeris=1">
                 Tim
               </a>
            </h2>
            <h2> <!-- ?numeris1 atsiras masyve-->
               <a href="template_gydytojas.php?numeris=2">
                 Paul
               </a>
            </h2>
            <h2> <!-- ?numeris1 atsiras masyve-->
               <a href="template_gydytojas.php?numeris=3">
                 Ona
               </a>
            </h2>


            <!-- <h2>   <?php echo $gyd['name']; ?> </h2> -->

       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js">     </script>

        <!-- !!!  mano js visada zemiau -->
        <script src="main.js">  </script>
    </body>
</html>
