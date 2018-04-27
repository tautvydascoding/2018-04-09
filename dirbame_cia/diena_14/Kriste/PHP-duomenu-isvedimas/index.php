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

include_once 'doctors-db.php';
// kad rastu funkcija is kito failo, mes turime padaryti Include ta savo faila, is kurio norime, kad matytu funkcija;
// getDoctor(1); // grista masyvas su id, vardu ir pavarde;
// print_r($gydytojas); // test ar veikia;

// kiekviena karta kai paleidi include, iterpia musu paruosta template;
// $x = getDoctorName(1);
// $y = getDoctorLastN(1);
// include 'template_doctors.php';
//
// $x = getDoctorName(2);
// $y = getDoctorLastN(2);
// include 'template_doctors.php';
//
// $x = getDoctorName(3);
// $y = getDoctorLastN(3);
// include 'template_doctors.php';
//
// $x = getDoctorName(4);
// $y = getDoctorLastN(4);
// include 'template_doctors.php';

// arba kitu atveju, sutrumpinant, padaryti For cikla;

for ($i=1; $i < 5; $i++) {
  $x = getDoctorName($i);
  $y = getDoctorLastN($i);
  include 'template_doctors.php';
}
// uzdejom, kad skaiciuojame nuo 1, nes duomenu baze prasideda nuo 1. ir jei rasau 0 - tada meta klaida; ir skaicius iki kiek ieskoti reikia "uzmesti" vienu skaiciumi daugiau, nes maziau, nei, o ne lygu!

 ?>











       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js">     </script>

        <!-- !!!  mano js visada zemiau -->
        <script src="main.js">  </script>
    </body>
</html>
