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

// =================svarbus patarimai===================:
// ARRAY: jeigu naudoji FOR || while cikla, tai negalvojant masyve naudoti "i" (pvz.: myArray[i])
// FOR:   "for (i = 0; i < x; i++) {"  - nesusijusi su uzdaviniu (skirtas apeit masyva/ ivykdyti daug kartu kazka)
// matricas  - visada nusipiesti ant popieriaus eskiza su testiniais duomenimis
// matrica narys paimamas: myMatrica[x][y]   x- stulpelis; y - eilute
// matrica - pasitikritni ar nereik x ir y sukeisti vietomis (ar nesuklydai kuris stulpelis ir kuris eilute )
// matricos ilgis daznai skiriasi nuo plocio.
//  pvz.:
 // for ( i < eiluciuSkaicius)
 //    for ( k < stulpeliuSkaicius)
 // =================// =================// =================


            // uzduotis
            // sukurti matrica, kurioje bus saugoma kiekvienos prekes info:
            // Antraste, img pavadinimas, kaina, prekes aprasymas

            $visosPrekes = [];
            // A. sukurti masyva preke: Antraste, img pavadinimas, prekes aprasymas, kaina

            $preke0 = ["Antraste", "img pavadinimas", "prekes aprasymas","kaina"];

            $visosPrekes[0] = $preke0;
            $preke1 = ["Balionas","balionas.png", "Oro balionas", 750];
            $preke2 = ["Piestukas", "11.jpg","Afigienas Pieštukas,", 1.5 ];
            $preke3 = ["Tusinukas", "writing.jpg", "Kam nepatinka Piestukai", 50];

            // print_r($preke1);
            // echo "<br />";
            // print_r($preke2);
            // echo "<br />";
            // print_r($preke3);
            // echo "<br />";



            // B. i masyva visosPrekes, ideti "preke" masyva

            $visosPrekes[1] = $preke1;
            $visosPrekes[2] = $preke2;
            $visosPrekes[3] = $preke3;

              // print_r($visosPrekes);


            // C. atvaizduodi kiekvienoje eiluteje po 3 prekes (naudojant for arba foreach)
// for ($i=1; $i <count($visosPrekes) ; $i++) {
//     echo "<article width='25%'>";
//     echo "<h2>".$visosPrekes[$i][1]."</h2>";
//     printf("<img src='images/" . $visosPrekes[$i][2] . "' width='200px;' alt='nieko'  />");
//     echo "<h3> Kaina: ".$visosPrekes[$i][3]."</h3>";
//     echo "</article>";
//   }


  // printf("<img src='images/" . $visosPrekes[1][1] . "' width='200px;' alt='nieko'  />");

               // 3 budai
               //  printf("<img src='./img/" . $visosPrekes[$i][1] . "' width='200px;' alt=''  />");
               //  printf("<img src='./img/%s' width='200px;' alt=''  />", $visosPrekes[$i][1]);

for ($i=1; $i <count($visosPrekes) ; $i++) :

  ?>

<article class="w-25 bg-warning text-center">
  <h2> <?php echo $visosPrekes[$i][0]; ?> </h2>
  <img src="images/<?php echo $visosPrekes[$i][1] ?>" width='100%' alt="nieko">
  <p>
      <?php echo $visosPrekes[$i][2];  ?>
  </p>
  <a class="btn btn-success w-50" href="#">
    <?php echo $visosPrekes[$i][3];  ?>&euro;   </a>
</article>

<?php echo "<hr />";
 endfor; ?>


       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js">     </script>

        <!-- !!!  mano js visada zemiau -->
        <script src="main.js">  </script>
    </body>
</html>
