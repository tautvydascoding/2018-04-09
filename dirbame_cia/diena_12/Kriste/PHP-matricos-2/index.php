<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.0/normalize.css">
    <link rel="stylesheet" href="libs/bootstrap4/css/bootstrap.css">

    <!-- !!! mano CSS failas visada pats zemiausias -->
    <link rel="stylesheet" href="css/master.css">
</head>



<h1> Isijunk console </h1>

<!-- // uzduotis
// sukurti matrica, kurioje bus saugoma kiekvienos prekes info:
// Antraste, img pavadinimas, kaina, prekes aprasymas

   // 3 budai
    // printf("<img src='./img/" . $visosPrekes[$i][1] . "' width='200px;' alt=''  />");
    // printf("<img src='./img/%s' width='200px;' alt=''  />", $visosPrekes[$i][1]); -->

<?php

// A. sukurti masyva preke: Antraste, img pavadinimas, prekes aprasymas, kaina
$visosPrekes = [];
  $slides = ["Puikios slides!", "slides", 350, "Naujos lengvai ciuoziancios slides suaugusiems."];
  $paciuzos = ["Puikios paciuzos!", "paciuzos", 60.50, "Devetos paciuzos vaikams."];
  $rogutes = ["Puikios rogutes!", "rogutes", 20, "Rogutes visiems."];
  $snieglentes = ["Puikios snieglentes!", "snieglentes", 280, "Kietos snieglentes-pirmyn i kalnus!"];
  $kitaIranga = ["Salmai, pirstines, apsaugos ir kt.", "ivairi iranga", "ziureti detaliau", "Nepamirsk pasirupinti apsaugomis"];

// B. i masyva visosPrekes, ideti "preke" masyva
$visosPrekes[0] = $slides;
$visosPrekes[1] = $paciuzos;
$visosPrekes[2] = $rogutes;
$visosPrekes[3] = $snieglentes;
$visosPrekes[4] = $kitaIranga;

// print_r($visosPrekes);
echo "<br />"; // tiesiog atskyrimui, kad geriau matytusi uzduociu rezultatai;

// C. atvaizduodi visas prekes;

for ($i=0; $i < count($visosPrekes); $i++) {
  for ($k=0; $k < count($slides); $k++) {
    echo $visosPrekes[$i][$k] . "<br />";
  }
  echo "<br />";
}

?>

<!-- // D. atvaizduodi kiekvienoje eiluteje po 3 prekes (naudojant for arba foreach) -->
<!-- // bei ideti simboli eur prie kainos; -->
<!-- note!!! cia labai svarbus ir atkreipti demesi - nepamirsti pasikartoti; -->

<?php
// atidarau funkcija ir idedu, kas noriu, kad kartotusi! cia panaudojau funkcijos atidaryma/uzdaryma ne {}, o : ir enfor! Tokiu budu lengviau skaitomas kodas;
for ($i=0; $i < count($visosPrekes); $i++) :
?>

<article class="w-50">
  <h1> <?php echo $visosPrekes[$i][0] ?>  </h1>
  <img src="../Images/3.png" alt=" <?php echo $visosPrekes[$i][1] ?> ">
  <p>  <?php echo $visosPrekes[$i][3]; ?> </p>
  <button type="button" name="button"> <?php echo $visosPrekes[$i][2]; ?> &euro; </button>
</article>


<?php
echo "<br />"; // tiesiog atskyrimui, kad geriau matytusi uzduociu rezultatai;
endfor // uzdarau funkcija!
 ?>






       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js">     </script>

        <!-- !!!  mano js visada zemiau -->
        <script src="main.js">  </script>
