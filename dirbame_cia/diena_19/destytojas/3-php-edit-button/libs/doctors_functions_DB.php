<?php


// 2018-04-26
// Tautvydas

//    kintamuju vardai , reiksme
define( 'HOST', 'localhost' );
define( 'MYSQL_VARTOTOJAS', 'root' );  // root
define( 'MYSQL_SLAPTAZODIS', 'root' );
define( 'DB_VARDAS', 'hospital4' );

// jungiames pr. DB  'hospital4'
 $connection = mysqli_connect( HOST, MYSQL_VARTOTOJAS, MYSQL_SLAPTAZODIS, DB_VARDAS);   // !!! jeigu pas jus pakeistas MYSQL PORT pvz:8889, reik nurodyt

mysqli_set_charset($connection, 'utf8'); //!!! "utf8" be bruksnelio!!!
// mysqli_set_charset($connection, 'utf8mb4'); //!!! "utf8" be bruksnelio!!!

// mysqli ini
// character-set-server=utf8
// collation-server=utf8_general_ci

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
    $mano_sql = "SELECT * FROM doctors
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
        echo "ERROR: gydytojo $nr nera <br />";
    }
}
// $gydytojas = getDoctor(3);
// print_r(   $gydytojas  );

// gydytojo idejimmas i DB
function createDoctorMINI($vardas, $pavardas) {
    $manoSQL = "INSERT INTO doctors
                       VALUES ('', '$vardas', '$pavardas');
                ";
    mysqli_query(  getPrisijungimas() , $manoSQL);
}
function createDoctor($vardas, $pavarde) {
    $vardas = htmlspecialchars( $vardas, ENT_QUOTES, 'UTF-8' );
    $pavarde = htmlspecialchars( $pavarde, ENT_QUOTES, 'UTF-8' );

    $manoSQL = "INSERT INTO doctors
                       VALUES ('', '$vardas', '$pavarde');
                ";
    $x = mysqli_query(  getPrisijungimas() , $manoSQL);
    if ($x) {
        echo "Pavyko sukurti gydytoja <br>";
    }
}
// createDoctor($_GET['vardas'], $_GET['pavarde']);
// createDoctor('Petars', ' Petrauskis\"s  ' );
// echo "Petrauskis&quot;s";

// gydytojo salinimas
function deleteDoctor( $nr ) {
    $manoSQL = "DELETE FROM doctors
                       WHERE id=$nr
                       LIMIT 1;
                ";
    mysqli_query( getPrisijungimas() , $manoSQL);
}
// deleteDoctor(12);

// atnaujinti gydytoja
function updateDoctor($nr, $vardas, $pavarde) {

    // sprintf - % vietoj kiekvieno %s isves kintamuosius
    $manoSQL = sprintf( "UPDATE doctors SET
                                    name = '%s',
                                    lname = '%s'
                                    WHERE id = '%s'
                                    LIMIT 1 ;
                         ",
                  htmlspecialchars( $vardas, ENT_QUOTES, 'UTF-8' ),
                  htmlspecialchars( $pavarde, ENT_QUOTES, 'UTF-8' ),
                  htmlspecialchars( $nr, ENT_QUOTES, 'UTF-8' )

                 );
    // %s - s - string, f- (float) skaicius su kableliu
    // sprintf("Vakar %s isejo i %s" , $vardas, $vieta);

    mysqli_query( getPrisijungimas(), $manoSQL);
}
// updateDoctor(10, 'Petras', 'Lietuvis' );


// atsijungiamm nuo DB, ideti i HTML failo apacia
// mysqli_close( $connection );



// "daug" gydytoju paemimas is DB
function getDoctors($kiekis = 9999) { // = 9999 - default value, jeigu nenurodei
    $manoSQL = "SELECT * FROM doctors  ORDER BY name  LIMIT $kiekis ";
    $rezultatai = mysqli_query( getPrisijungimas(),  $manoSQL);

    // tikriname ar radome nors viena gydytoja
    if ( mysqli_num_rows($rezultatai) > 0 ) {
         // cia NENAUDOTI mysqli_fetch_assoc, NES  jis paima TIk VIENA eilute (gydytoja)
         return $rezultatai;
    } else {
        echo "Gydytoju nepavyko rasti!!! <br>";
    }
}
// $pirmi_4_gydytojai = getDoctors(4);
// $rezultatai = mysqli_fetch_assoc($rezultatai);

//==========================panaudojimas====getDoctors==============

// is 4 surastu gydytoju paimmae pirmaji/sekanti
// $vienasGydytojas = mysqli_fetch_assoc( $pirmi_4_gydytojai    );
//
// //  Ar cia tiesa?
// while ($vienasGydytojas) {
//      echo $vienasGydytojas['name'] . " " . $vienasGydytojas['lname'] . "<br />";
//      // !!! is 4 surastu gydytoju paimmae sekanti
//      $vienasGydytojas = mysqli_fetch_assoc( $pirmi_4_gydytojai    );
// }
