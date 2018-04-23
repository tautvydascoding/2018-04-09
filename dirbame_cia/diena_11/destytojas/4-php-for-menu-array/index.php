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


                // uzduotis 1
                // A. susikurti meniu masyva: home, about, gallery, contact, blog
                // B. atspausdinti visus meniu punktus i HTML (su html tag'ais)


                $manoMenu = ["home", "about", "gallery", "contact", "blog"];
             ?>
            <nav>
                <ul>
                    <li>   <?php  echo $manoMenu[0];  ?> </li>
                    <li>   <?php  echo $manoMenu[1];  ?> </li>
                    <li>   <?php  echo $manoMenu[2];  ?> </li>
                    <li>   <?php  echo $manoMenu[3];  ?> </li>
                    <li>   <?php  echo $manoMenu[4];  ?> </li>
                </ul>
            </nav>

            <nav>
                <ul>
                    <?php
                        for ($i=0; $i < count($manoMenu); $i++) {  // count grazina masyvo ilgi
                              echo "<li>   $manoMenu[$i]    </li>";
                        }
                     ?>
                </ul>
            </nav>


            <?php
                // uzduotis 2
                // A. susirasti 6 nuotraukas
                // B. susikurti nuotrauku pavadinimu masyva
                // C. atspausdinti visas nuotraukas su ciklu, po 3-ris i eilute
                // <img src='./img/1.jpg' alt=''  />
                $nuotraukos = [];
                $nuotraukos[0] = '1.jpg';
                $nuotraukos[1] = '2.png';
                $nuotraukos[2] = '3.png';
                $nuotraukos[3] = '4.jpg';
                $nuotraukos[4] = '5.jpg';
                $nuotraukos[5] = '6.jpg';

             ?>
             <section>
                 <?php   for ($i=0; $i < 6; $i++) :     ?>
                            <img src='img/<?php   echo $nuotraukos[$i]  ?>' alt='nuotrauka' width="30%" />
                <?php    endfor    ?>
             </section>

       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js">     </script>

        <!-- !!!  mano js visada zemiau -->
        <script src="main.js">  </script>
    </body>
</html>
