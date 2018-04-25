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

    // matricos kurimas
    $visDarbuotojai = [
        ['jonas', 'jonaitis', 1990],
        ['Ona', 'Onutaite', 1980],
        ['Kestas', 'kestaitis', 2001]
      ];


    $visDarbuotojai = [];
    $d1 = ['jonas', 'jonaitis', 1990];
    $d2 = ['Ona', 'Onutaite', 1980];
    $d3 = ['Kestas', 'kestaitis', 2001];
    $visDarbuotojai[0] = $d1;
    $visDarbuotojai[1] = $d2;
    $visDarbuotojai[2] = $d3;

    print_r(   $d1  );
    echo "<br />";
    print_r(   $visDarbuotojai  );
    echo "<br />";
    var_dump(   $d1  ); // isveda masyvus ar kintamuosius su info apie ju tipus
    echo "<br />";
    echo "<br />";

    $ilgis =  count($d1); // suskaiciuoja masyvo stalciu skaiciu
    for ($i=0; $i < $ilgis; $i++) {
         echo $d1[ $i ] . "<br>";
    }

    // Jono isvedimas, naudojant matrica
    $ilgis =  count( $visDarbuotojai[0] ); // suskaiciuoja masyvo stalciu skaiciu
    for ($i=0; $i < $ilgis; $i++) {
         echo $visDarbuotojai[ 0 ][$i] . "<br>";
    }


    // UZDUOTIS 1.0
    // A. sukurti masyva darbuotojas1: Jonas, Jonaitis, 1980, Inspektorius
    // B. sukurti masyva darbuotojas2: Ona, Onute, 1980, sekretore
    // C. sukurti masyva darbuotojas3: Kestas, Kerta, 2001, pavaduotojas
    // D. sukurti masyva 'visiDarbuotojai'
    // E.   i 'visiDarbuotojai'  ideti visus dartuotoju masyvus
    // UZDUOTIS 1.1
    // isvesti visa informacija apie pirma darbuotoja (naudojant FOR cikla)
    // UZDUOTIS 1.2
    // isvesti visu  darbuotoju tik vardus (naudojant FOR cikla)
    // UZDUOTIS 1.3
    // isvesti visa informacija apie kiekviena  darbuotoja  (naudojant VIENA FOR cikla)
    // UZDUOTIS 1.4
    // isvesti visa informacija apie kiekviena  darbuotoja  (naudojant DU FOR ciklus)
    for ($i=0; $i < 3; $i++) {
        echo $visDarbuotojai[$i ][0] . "<br>";
    }

 // eina per atskirus darbuotojus
    for ($i=0; $i < 3; $i++) {
        // eina per konkretu darbuotoja
        for ($k=0; $k < 3; $k++) {
            echo "i: $i, k: $k ";
            echo $visDarbuotojai[$i ][$k] . "<br>";
        }
    }
    // arba

    // $darbuotojuSk =  count( $visDarbuotojai ); // suskaiciuoja masyvo stalciu skaiciu
    // for ($i=0; $i < $darbuotojuSk; $i++) {
    //     $infoKiekis = count( $visDarbuotojai[$i] );
    //     for ($k=0; $k < $infoKiekis; $k++) {
    //         echo $visDarbuotojai[$i ][$k] . "<br>";
    //     }
    // }
 ?>



       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js">     </script>

        <!-- !!!  mano js visada zemiau -->
        <script src="main.js">  </script>
    </body>
</html>
