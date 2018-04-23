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

          // UZDUOTIS  "Switch"
         // paduoti varda ir Jeigu jis lygus:
         // "audi" - atspausdinti "Susimastykite apie variklio prieziura"
         // "BMW" - atspausdinti "Susimastykite apie greiti ir vairavimo kultura"
         // "opel" - atspausdinti "Susimastykite apie naujus priedus"
         $firma = '     bMw ';
         $firma = trim( $firma ); // nuemam tarpus ir tab is teksto priekio ir galo
         $firma = strtolower( $firma ); // paverciame mazosiomis raidemis

         switch ( $firma  ) {
             case 'audi':
                         echo "Susimastykite apie variklio prieziura";
                         echo "Susimastykite apie variklio prieziura";
                 break;
             case 'bmw':
                         echo "Susimastykite apie greiti ir vairavimo kultura";
                 break;

             default:
                    echo "  $firma - firmos nezinome";
                 break;
         }


         ?>

       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js">     </script>

        <!-- !!!  mano js visada zemiau -->
        <script src="main.js">  </script>
    </body>
</html>
