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

    <?php

        // autorius:
        $vardas = 'Tomas';
        $pavarde = 'Tomauskis';

        $straipsnis = [];

        $straipsnis["antraste"] = 'Brangsta butai';
        $straipsnis["aprasymas"] = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.';
        $straipsnis["data"] = '2018/04/26';

/// kad susikalbetu du failai, reikia padaryti include;
include('straipsnis.php');
// jeigu buciau susikurusi antra straipsnio failam ji galeciau includinti taip pat.


                // echo $straipsnis["antraste"] . "<br />"; // . "<br />"; => taskas reiskia, kad pridedu teksta ar kazka, o br, kad is naujos eilutes vis rasytu;
                //
                // foreach ($straipsnis as $vienoStalciausTurinys) {
                //   echo $vienoStalciausTurinys . "<br />";
                // }





        ?>





       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js">     </script>

        <!-- !!!  mano js visada zemiau -->
        <script src="main.js">  </script>
    </body>
</html>
