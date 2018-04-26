<?php


// 2018-04-26
// Tautvydas

//    kintamuju vardai , reiksme
define( 'HOST', 'localhost' );
define( 'MYSQL_VARTOTOJAS', 'root' );  // root
define( 'MYSQL_SLAPTAZODIS', 'root' );
define( 'DB_VARDAS', 'hospital4' );

// jungiames pr. DB  'hospital4'
 $connection = mysqli_connect( HOST, MYSQL_VARTOTOJAS, MYSQL_SLAPTAZODIS, DB_VARDAS);   // !!! jeigu pas jus pakeistas PORT pvz:8888, reik nurodyt

 if ($connection) {
     echo "Prisijungete sekmingai <br>";
 } else {
      echo "EROROR  nepavyko prisijungti pr. DB <br>" . mysqli_connect_error();
 }
