<?php



define( 'HOST', 'localhost' );
define( 'MYSQL_VARTOTOJAS', 'root' );
define( 'MYSQL_SLAPTAZODIS', 'root' );
define( 'DB_VARDAS', 'blogas' );

 $connection = mysqli_connect( HOST, MYSQL_VARTOTOJAS, MYSQL_SLAPTAZODIS, DB_VARDAS);

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
function getStraipsnis( $nr ) {
    $mano_sql = "SELECT * FROM straipsniai
                          WHERE id='$nr';
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
        echo "ERROR: straipsnio $nr nera <br />";
    }
}
// $straipsnis = getStraipsnis(3);
// print_r(   $straipsnis  );


//
