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
            <!-- <h1> Isijunk console </h1> -->

<!-- KINTAMIEJI su dolerio zenklu php kalboje-->



<!-- isvedimo komandos -->
<?php echo "Labas <br />" ;

// $vardas = "Tomas";
// echo $vardas;

// <!-- php kalboje taskas jungia stringus -->

//
// echo "Viso" . $vardas . "Gero <br />";
//
// // <!-- dvigubose kabutese galima naudoti kintamuosius! isskyrus matricas -->
// echo 'Sodyba priklause $vardas' <br>;
// // <!-- // isves sodyba $vardas -->
// echo "Sodyba priklause $vardas" <br />;
// <!-- // isves sodyba priklause Tomas -->
//
// function printVardas() {
//   $y = "kintamasis";
//   $z = "GOGO";
//   // $g = ""
//   echo "Tekstas <br />";
//   print("tekstas su print <br />");
//
// }
// printVardas();

?>
<!--


<! // UZDUOTIS  "Switch"
// paduoti varda ir Jeigu jis lygus:
// "audi" - atspausdinti "Susimastykite apie variklio prieziura"
// "BMW" - atspausdinti "Susimastykite apie greiti ir vairavimo kultura"
// "opel" - atspausdinti "Susimastykite apie naujus priedus"

<!  -->

<?php

$firma = '  bMw   ';
$firma = trim($firma); // trim nuima is galo ir prieko tarpus
$firma = strtolower($firma); // visas raides pavercia mazosiomois
// nes cia svarbu tarpai, mazosios/didziosios raides!;

switch ($firma) {
  case 'audi':
      echo "Susimastykite apie greiti";
    break;

  case 'bmw':
      echo "Susimastykite apie vairavimo kultura";
    break;

  default:
      echo "$firma - firmos nezinome";
    break;
}

?>






        <script src="libs/jquery-3.2.1.min.js">     </script> -->

        <!-- javascript failas psakutinis -->
        <script src="main.js">  </script>
    </body>
</html>
