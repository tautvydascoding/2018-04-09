<?php

// 2018-04-26
// Vaidotas

// kintamuju reiksme
define( 'HOST', 'localhost' );
define( 'MYSQL_VARTOTOJAS', 'root' );  // root
define( 'MYSQL_SLAPTAZODIS', 'root' );
define( 'DB_VARDAS', 'hospital4' );

// jungiames pr. DB  'hospital4'
 $connection = mysqli_connect( HOST, MYSQL_VARTOTOJAS, MYSQL_SLAPTAZODIS, DB_VARDAS);   // !!! jeigu pas jus pakeistas PORT pvz:8888, reik nurodyt


 function getPrisijungimas() {
     global $connection; // sioje f-joje naudosime blobalu kintamaji
     if ($connection) {
         echo "Prisijungete sekmingai <br>";
         echo $connection;
     } else {
          echo "EROROR  nepavyko prisijungti pr. DB <br>" . mysqli_connect_error();
     }
 }
getPrisijungimas();


// function getDoctor( $nr ) {
//     $mano_sql = "SELECT * FROM doctors
//                           WHERE id='$nr';
//                 ";
//     //                             irodymas            SQL komandos
//     $rezultatai = mysqli_query(  getPrisijungimas()  , $mano_sql);
//     // var_dump($rezultatai); // test
//     if ($rezultatai) {
//         // mysqli_fetch_assoc  - apdoroje duomenis
//         // is paduoto MYSQL objekto paima sekancia eilute ir pavercia i masyva
//         $rezultatai = mysqli_fetch_assoc($rezultatai);
//          return $rezultatai;
//     }  else {
//         echo "ERROR: gydytojo $nr nera <br />";
//     }
// }
// $gydytojas = getDoctor(3);
// print_r(   $gydytojas  );


//