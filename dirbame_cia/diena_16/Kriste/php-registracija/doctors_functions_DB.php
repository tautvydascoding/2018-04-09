<?php


//    kintamuju vardai , reiksme
define( 'HOST', 'localhost' );
define( 'MYSQL_VARTOTOJAS', 'root' );  // root
define( 'MYSQL_SLAPTAZODIS', 'root' );
define( 'DB_VARDAS', 'Hospital4' );

// jungiames pr. DB  'hospital4'
 $connection = mysqli_connect( HOST, MYSQL_VARTOTOJAS, MYSQL_SLAPTAZODIS, DB_VARDAS);   // !!! jeigu pas jus pakeistas MYSQL PORT pvz:8889, reik nurodyt

 // f-ja
 function getPrisijungimas() {
     global $connection; // sioje f-joje naudosime blobalu kintamaji
     if ($connection) {
         //echo "Prisijungete sekmingai <br>";
         return $connection;
     } else {
          echo "EROROR  nepavyko prisijungti pr. DB <br>" . mysqli_connect_error();
     }
 }
getPrisijungimas();

//
function getDoctor( $nr ) {
    $mano_sql = "SELECT * FROM Doctors
                          WHERE Id='$nr';
                ";
    //                             irodymas            SQL komandos
    $rezultatai = mysqli_query(  getPrisijungimas()  , $mano_sql);
    // var_dump($rezultatai); // test

    // mysqli_num_rows - suskaiciuoja kiek radai gydytoju
    if (mysqli_num_rows($rezultatai)  > 0) {
        // mysqli_fetch_assoc  - apdoroje duomenis
        // is paduoto MYSQL objekto paima sekancia eilute ir pavercia i masyva
        $rezultatai = mysqli_fetch_assoc($rezultatai);
         return $rezultatai;
    }  else {
        echo "ERROR: gydytojo $nr nera <br />";
    }
}
// $gydytojas = getDoctor(3);
// print_r(   $gydytojas  );


function createDoctor($vardas, $pavarde) {

$vardas = htmlspecialchars($vardas, ENT_QUOTES, 'UTF-8');
$pavarde = htmlspecialchars($pavarde, ENT_QUOTES, 'UTF-8');

  $manoSQL = "INSERT INTO Doctors
                      VALUES ('', '$vardas', '$pavarde');
              ";
  $x = mysqli_query(getPrisijungimas(), $manoSQL);
  if ($x) {
    echo "Pavyko sukurti gydytoja <br />";
  }
}



//
