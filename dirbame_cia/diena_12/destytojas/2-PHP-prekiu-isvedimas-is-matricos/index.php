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

                // UZDUOTIS 2 --------------
                // sukurti matrica, kurioje bus saugoma kiekvienos prekes info:
                // Antraste, img pavadinimas, kaina, prekes aprasymas

                // A. sukurti masyva preke: Antraste, img pavadinimas, prekes aprasymas, kaina
                // B. i masyva visosPrekes, ideti "preke" masyva
                // C. atvaizduodi kiekvienoje eiluteje po 3 prekes (naudojant for arba foreach)



            $preke1 = ['Dviratis', '1.jpg', 299, "Kalnu dviratis labai saunus"];
            $preke2 = ['Snieglente', '2.jpg', 159.99, "Snieglente   labai lanksti"];
            $preke3 = ['Paspirtukas su 3 ratais', '3.jpg', 110, "Paspirtukas su 3 ratais - melynas"];
            $preke4 = ['Riedis 240w', '4.jpg', 499, "30km/h skriejantis riedis, 30min"];

            $visosPrekes = [];  // musu matrica
            $visosPrekes[0] = $preke1;
            $visosPrekes[1] = $preke2;
            $visosPrekes[2] = $preke3;
            $visosPrekes[3] = $preke4;

            // test
            // print_r( $visosPrekes );

            $prekiuSk = count($visosPrekes);
            for ($i=0; $i < $prekiuSk; $i++) :
             ?>
                    <article class="w-25  bg-warning">
                        <h2>   <?php   echo $visosPrekes[$i][0]; ?>  </h2>
                        <img src="img/xxx.jpg" alt="foto xxx">
                        <p>
                            <?php   echo $visosPrekes[$i][3]; ?>
                        </p>
                        <a class="btn bg-success text-light" href="#">
                            <?php   echo $visosPrekes[$i][2]; ?>      &euro;
                        </a>
                    </article>

            <?php  endfor;  ?>

       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js">     </script>

        <!-- !!!  mano js visada zemiau -->
        <script src="main.js">  </script>
    </body>
</html>
