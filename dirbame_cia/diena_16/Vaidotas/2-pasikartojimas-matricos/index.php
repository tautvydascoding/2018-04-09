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


            <!-- // 2) sukurti matirca:
            // Tomas, 1981, Buhalteris
            // Ona 1980 Programuotoja
            // Petras, 1975, Direktorius
            // 2.1) atspausdinti su FOR ciklu
            // 2.2) atspausdinti su FOR FOR ciklu
            // 2.3) atspausdinti su FOREACH -->



      <?php
      echo "<br />";
      $visiDarbuotojai=[];
      $x1 = ["Tomas", 1981, "Buhalteris"];
      $x2 = ["Ona", 1988, "Programuotoja"];
      $x3 = ["Petras", 1975, "direktorius"];

      $visiDarbuotojai[0] = $x1;
      $visiDarbuotojai[1] = $x2;
      $visiDarbuotojai[2] = $x3;

      print_r($visiDarbuotojai);

      echo "<br />";

      for ($i=0; $i <count($visiDarbuotojai) ; $i++) {
        echo $visiDarbuotojai[$i][0]." ";
        echo $visiDarbuotojai[$i][1]." ";
        echo $visiDarbuotojai[$i][2];
        echo "<br/>";

      }

      for ($i=0; $i <count($visiDarbuotojai) ; $i++) {
        for ($kk=0; $kk <3 ; $kk++) { //darbuotojo masyvo stalciaus nr
        echo $visiDarbuotojai[$i][$kk]."<br />"; // kk=0, kk=1, kk=2;
        }
        echo "<br/>";

      }


      foreach ($visiDarbuotojai as $stalciausTurinys) {
        echo $stalciausTurinys[0]." ";
        echo $stalciausTurinys[1]." ";
        echo $stalciausTurinys[2]." ";
        echo "<br/>";
        // code...
      }









      ?>


       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js">     </script>

        <!-- !!!  mano js visada zemiau -->
        <script src="main.js">  </script>
    </body>
</html>
