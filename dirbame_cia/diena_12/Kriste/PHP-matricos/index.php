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



<?php

// Matricos kurimas;

// $visiDarbuotojai = [
//   ["jonas", "jonaitis"],
//   ["ona", "onyte"],
// ];
// bet sitas budas labai ilgas ir galima padaryti nemazai klaidu.
// dabar cia sukuriai masyva su dviem stalciais, kuriuose dar po du stalcius;

$visiDarbuotojai = [];
  $d0 = ['jonas', 'jonaitis', 1990];
  $d1 = ['petras', 'petraitis', 1980];
  $d2 = ['ona', 'onyte', 2000];
  $visiDarbuotojai[0] = $d0;
  $visiDarbuotojai[1] = $d1;
  $visiDarbuotojai[2] = $d2;

// skirtingi budai, kaip galima isvesti i ekrana info- ji skirta mums, nes vartotojui tokios padrikos info neisvedinesime :)
print_r($d0);
echo "<br />";

print_r($visiDarbuotojai);
echo "<br />";

var_dump($d0); // var dump komanda parodo ir papildoma informacija apie ju tipus, ir net string tipo parodo kiek raidziu yra zodyje;
echo "<br />";

// atspausdinti informacija apie Jona;
// php kalboje ne length, o count, kad automatiskai apskaisiuotu masyvo stalciu skaiciu;
for ($i=0; $i < count($d0); $i++) {
  echo $d0[$i] . "<br />"; // pridejau br, tam kad pradetu kiekviena stalciu is naujos eilutes. komandas jungiame su tasku php kalboje;
}

// Petro masyvo radimas ir isvedimas visoje matricoje;
for ($i=0; $i < count($visiDarbuotojai[1]); $i++) {
  echo $visiDarbuotojai[1][$i] . "<br />";
}

echo "<br />"; // tiesiog pasidarau tarpu, nes sunku suprast ar gavosi uzdavinys :)


// visu darbuotoju isvedimas su visa informacija kiekvieno darbuoto stalciuje;
for ($i=0; $i < count($visiDarbuotojai); $i++) {
  echo "pirmo ciklo i: $i"; // cia supratimui, kaip keiciasi i pirmame cikle
  for ($k=0; $k < count($d0); $k++) {
    echo "2-o ciklo i: $i, 2-o ciklo k: $k"; // cia supratimui, kaip keiciasi i ir k antrame cikle;
    echo $visiDarbuotojai[$i][$k] . "<br />";
    }
  }

echo "<br />"; // tiesiog atskirymui, kad geriau matytusi uzduociu rezultatai;

// isvesti visu darbuotoju vardus;
for ($i=0; $i < count($visiDarbuotojai); $i++) {
  echo $i; // cia supratimui, kaip keiciasi i;
  echo $visiDarbuotojai[$i][0] . "<br />";
}

echo "<br />"; // tiesiog atskirymui, kad geriau matytusi uzduociu rezultatai;


// isvesti visu darbuotoju pavardes;
for ($i=0; $i < count($visiDarbuotojai); $i++) {
  echo $i; // cia supratimui, kaip keiciasi i;
  echo $visiDarbuotojai[$i][1] . "<br />";
}

echo "<br />"; // tiesiog atskirymui, kad geriau matytusi uzduociu rezultatai;

// isvesti visa info apie visus darbuotojus;
for ($i=0; $i < count($visiDarbuotojai); $i++) {
  echo $visiDarbuotojai[$i][0] . "<br />";
  echo $visiDarbuotojai[$i][1] . "<br />";
  echo $visiDarbuotojai[$i][2] . "<br />";
}

echo "<br />"; // tiesiog atskirymui, kad geriau matytusi uzduociu rezultatai;

?>













       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js">     </script>

        <!-- !!!  mano js visada zemiau -->
        <script src="main.js">  </script>
