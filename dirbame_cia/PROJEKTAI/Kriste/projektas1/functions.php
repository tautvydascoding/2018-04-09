<?php


//    kintamuju vardai , reiksme
define( 'HOST', 'localhost' );
define( 'MYSQL_VARTOTOJAS', 'root' );  // root
define( 'MYSQL_SLAPTAZODIS', 'root' );
define( 'DB_VARDAS', 'zylesdebesy' );

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
function getRings( $nr ) {
    $mano_sql = "SELECT * FROM items
                          WHERE id='$nr' AND category='rings';
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
        echo "ERROR: rings $nr nera <br />";
    }
}

//
function getBracelets( $nr ) {
    $mano_sql = "SELECT * FROM items
                          WHERE id='$nr' AND category='bracelets';
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
        echo "ERROR: bracelets $nr nera <br />";
    }
}

//
function getKeychains( $nr ) {
    $mano_sql = "SELECT * FROM items
                          WHERE id='$nr' AND category='keychains';
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
        echo "ERROR: keychains $nr nera <br />";
    }
}

//
function getEarings( $nr ) {
    $mano_sql = "SELECT * FROM items
                          WHERE id='$nr' AND category='earings';
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
        echo "ERROR: earings $nr nera <br />";
    }
}

//
function createNewsletter($elPastas) {

$elPastas = htmlspecialchars($elPastas, ENT_QUOTES, 'UTF-8');

  $manoSQL = "INSERT INTO newsletter
                      VALUES ('', '$elPastas');
              ";
  $x = mysqli_query(getPrisijungimas(), $manoSQL);
  if ($x) {
    echo "Pavyko sukurti newsletter vartotoja <br />";
  }
  else {
    echo "NEPAVYKO!!!";
  }
}

//
function createQuickMessage($vardas, $pastas, $klausimas) {

$vardas = htmlspecialchars($vardas, ENT_QUOTES, 'UTF-8');
$pastas = htmlspecialchars($pastas, ENT_QUOTES, 'UTF-8');
$klausimas = htmlspecialchars($klausimas, ENT_QUOTES, 'UTF-8');

  $manoSQL = "INSERT INTO message
                      VALUES ('', '$vardas', '$pastas', '$klausimas');
              ";
  $x = mysqli_query(getPrisijungimas(), $manoSQL);
  if ($x) {
    echo "Pavyko sukurti klausima <br />";
  }
  else {
    echo "NEPAVYKO!!!";
  }
}
