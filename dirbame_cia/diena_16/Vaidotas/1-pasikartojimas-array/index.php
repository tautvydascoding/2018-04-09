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

            // ---- -PASIKARTOJIMAS PROGRAMAVIMO PAGRINDU TESTUI-----
            // 1) sukurti masyva : 1981, 1980, 1975, 1995, 1999
            // 1.1) atspausdinti masyva naudojant FOR cikla, While cikla ir FOREACH cikla
            // 1.4 Atspausdinti kas antra data
            // 1.5 Atspasudinti visas datas nuo 3-cios (iskaitant 3-cia)


            // 2) sukurti matirca:
            // Tomas, 1981, Buhalteris
            // Ona 1980 Programuotoja
            // Petras, 1975, Direktorius
            // 2.1) atspausdinti su FOR ciklu
            // 2.2) atspausdinti su FOR FOR ciklu
            // 2.3) atspausdinti su FOREACH


        <?php
         $masyvas = array(1981, 1980, 1975, 1995, 1999);

         echo "<br /><br />";
         print_r($masyvas);

         //asociatyvus masyvas, kuriam netinka for ciklas, galima naudoti While ar Foreach

         $darbuotojuDatos =['jonas'=> 1981, 'petras'=> 1980, 'tomas'=> 1975, 'alma'=> 1995, 'algis'=> 1999];



         echo "<br /><br />";
         //masyvo ilgio kintamasis
         $arrlength = count($masyvas);

         echo $arrlength;

        echo "<br /><br />";

         for ($i=0; $i <$arrlength ; $i++) {
           echo $masyvas[$i]."<br />";
         }

          echo "<br />atspausdint nuo 3 <br />";


         for ($i=2; $i <$arrlength ; $i++) {
          echo $masyvas[$i]."<br />";
         }

         echo "<br />atspausdint kas antra data <br />";


                  for ($i=0; $i <$arrlength ; $i= $i+2) {
                   echo $masyvas[$i]."<br />";
                  }





         echo "<br />While printinimas<br />";


         $kk = 0;
         while ($kk <= $arrlength) {

           echo $masyvas[$kk]."<br />";
           if ($kk == 1000) {
             echo "kazkas negerai ERRROR: 001";
             break;

           }
           $kk++;
         }

         echo "<br />For each pirmas printinimas<br />";

         foreach ($masyvas as $value) {
           echo $value."<br />";
         }

         echo "<br />For each antras printinimas<br />";

         foreach ($darbuotojuDatos as $stalciausPavadinimas => $isgalvotasTurinys) {
           echo $stalciausPavadinimas." : ".$isgalvotasTurinys."<br />";
         }

         echo "<br /><br />";



         ?>


       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js">     </script>

        <!-- !!!  mano js visada zemiau -->
        <script src="main.js">  </script>
    </body>
</html>
