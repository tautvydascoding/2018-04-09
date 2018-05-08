<!DOCTYPE html>


<!--
0. išsivest gydytojus;
1 sukurti "Edit" mygtuka, kuri paspaudus , vartotojas patektu i template-edit.php faila ir per ?numeris idetu 2 faila
2. template-edit.php faile - isvesti visa informacija apie redaguojamsu duomenis (ivedimo laukuose) ir ideti mygtuka "Save"
3. paspaudus save mygtuka, duomenys turi issisaugoti, bet ne kaip nauji, o pakuoreguoti esamus -->



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
        include_once("doctors_functions_DB.php");
        $nr = $_GET['numeris']; //testas
        $gyd=getDoctor($nr);

        // print_r($gyd);

         ?>
            <h1> Isijunk   </h1>

          <form class="" action="update-doctor.php" method="GET">
            <input type="text" name="vardas" value="<?php echo $gyd['name'] ?>">
            <input type="text" name="pavarde" value="<?php echo "$gyd[lname]" ?>">
            <input type="hidden" name="id" value="<?php echo "$gyd[id]" ?>">
            
            <input type="submit" name="submmit" value="Save">
          </form>



       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js">     </script>

        <!-- !!!  mano js visada zemiau -->
        <script src="main.js">  </script>
    </body>
</html>
