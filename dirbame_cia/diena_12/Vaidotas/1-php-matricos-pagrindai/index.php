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
//matricos kurimas
$visiDarbuotojai = [];
$d1 = ['Jonas','Jonaitis',1990];
$visiDarbuotojai[0]= $d1;
$d2 = ['Ona', 'Onutaite', 1980];
$visiDarbuotojai[1]= $d2;
$d3 = ['Kestas', 'Kestaitis', 2001];
$visiDarbuotojai[2]= $d3;


print_r( $d1);
echo "<br />";
print_r( $visiDarbuotojai);
echo "<br />";

var_dump( $d1 ); // isveda masyvus ar kintamuosius su info apie ju tipus
echo "<br />";


$ilgis = count($d1); // suskaiciuoja stalciu suskaiciu
  for ($i=0; $i <$ilgis ; $i++) {
    echo $d1[$i]."<br />";
  }

// jono isvedimas naudojant matrica

$ilgis = count($visiDarbuotojai[0]); // suskaiciuoja stalciu skaiciu
  for ($i=0; $i <$ilgis ; $i++) {
    echo $visiDarbuotojai[0][$i]."<br />";
  }

// visu darbuotoju isvedimas

$darbuotojuSkaicius = count($visiDarbuotojai); // suskaiciuoja stalciu skaiciu
// echo $ilguma."<br>";

  for ($i=0; $i <$darbuotojuSkaicius ; $i++) { //eina per atskirus darbuotojus
        for ($k=0; $k <count($visiDarbuotojai[$i]); $k++) { // eina per konkretaus darbuotojo masyva
      echo $visiDarbuotojai[$i][$k]."<br />";
    }
  }
      // echo $visiDarbuotojai[0][1];

    // 1.isvesti visus vardus

    for ($i=0; $i <count($visiDarbuotojai) ; $i++) {
      echo $visiDarbuotojai[$i][0]."<br />";
    }
    // 2.isvesti visas pavardes
    for ($i=0; $i <count($visiDarbuotojai) ; $i++) {
      echo $visiDarbuotojai[$i][1]."<br />";
    }
    // 3 isvesti visa info apie visas pavardes
    for ($i=0; $i <count($visiDarbuotojai) ; $i++) {
      echo $visiDarbuotojai[$i][0]."<br />";
      echo $visiDarbuotojai[$i][1]."<br />";
      echo $visiDarbuotojai[$i][2]."<br /> <hr />";

    }


   ?>



       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js">     </script>

        <!-- !!!  mano js visada zemiau -->
        <script src="main.js">  </script>
    </body>
</html>
