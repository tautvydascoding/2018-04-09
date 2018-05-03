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
            <h1> PASIKARTOJIMAS PROGRAMAVIMO PAGRINDU TESTUI  </h1>

<?php

            // -PASIKARTOJIMAS PROGRAMAVIMO PAGRINDU TESTUI-
            // 1) sukurti masyva : 1981, 1980, 1975, 1995, 1999

$datos = [];
  $datos[0] = '1981';
  $datos[1] = '1980';
  $datos[2] = '1975';
  $datos[3] = '1995';
  $datos[4] = '1999';

// 1.1) atspausdinti masyva naudojant FOR cikla:
for ($i=0; $i < count($datos); $i++) {
  echo $datos[$i] . "<br />";
}

echo "<br />";

    // FOREACH cikla:
foreach ($datos as $abc) {
  echo $abc . "<br />";
}

echo "<br />";

    // While cikla:
$k=0;
while ($k < count($datos)) {
  echo $datos[$k] . "<br />";
  $k++;
}

echo "<br />";

// 1.4 Atspausdinti kas antra data


// galima keliais budais, vienas is ju i didinti ne kas viena, o kas antra;
// jeigu noreciau paimti ne nuo 0, tai reiktu i atspirties taska padaryti nuo kito skaiciaus, pvz.1;

for ($i=0; $i < count($datos); $i+=2) {
    echo $datos[$i] . "<br />";
}

echo "<br />";

// 1.5 Atspausdinti visas datas nuo 3-cios (iskaitant 3-cia) -->

for ($i=2; $i < count($datos); $i++) {
    echo $datos[$i] . "<br />";
}

echo "<br />";

            // 2) sukurti matrica:
            // Tomas, 1981, Buhalteris
            // Ona 1980 Programuotoja
            // Petras, 1975, Direktorius

$darbuotojai = [];
  $d0 = ['Tomas', 1981, 'Buhalteris'];
  $d1 = ['Ona', 1980, 'Programuotoja'];
  $d2 = ['Petras', 1975, 'Direktorius'];
    $darbuotojai[0] = $d0;
    $darbuotojai[1] = $d1;
    $darbuotojai[2] = $d2;
// print_r($darbuotojai); // pasitikriname ar pavyko;

    // 2.1) atspausdinti su vienu FOR ciklu

for ($i=0; $i < count($darbuotojai); $i++) {
  echo $darbuotojai[$i][0];
  echo $darbuotojai[$i][1];
  echo $darbuotojai[$i][2];
  echo "<br />";
}

    // 2.2) atspausdinti su FOR FOR (dvigubu ciklu) ciklu

for ($i=0; $i < count($darbuotojai); $i++) {
  for ($yyy=0; $yyy < count($darbuotojai); $yyy++) {
    echo $darbuotojai[$i][$yyy];
  }
  echo "<br />";
}

    // 2.3) atspausdinti su FOREACH-->

foreach ($darbuotojai as $info) {
  // print_r($info); //psaitikrinau ar veikia. PROFESIONALUS budas isvesti i ekrana info yra su echo;
  echo $info[0];
  echo $info[1];
  echo $info[2];
echo "<br />";
}

// 2.3) atspausdinti su dvigubu FOREACH-->
// KAIP su situo? pasibandyti;

foreach ($darbuotojai as $info) {
  foreach ($info as $abc) {
  }
var_dump($info, $abc); // tik nemoku graziia atspausdinti;
echo "<br />";
}

 ?>

       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js">     </script>

        <!-- !!!  mano js visada zemiau -->
        <script src="main.js">  </script>
    </body>
</html>
