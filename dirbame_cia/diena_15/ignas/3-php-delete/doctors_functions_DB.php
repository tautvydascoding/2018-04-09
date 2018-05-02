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


//

// mysql_close($connection);
// //atjungia nuo duomenu bazes. deti i htmlo failo apacia.
// 
// 
// gydytojo kurimas
function createDoctor($vardas, $pavarde) {
    $vardas = htmlspecialchars($vardas, ENT_QUOTES, 'UTF-8');
    $pavarde = htmlspecialchars($pavarde, ENT_QUOTES, 'UTF-8');
    $manoSQL = "INSERT INTO doctors 
                        VALUES ('', '$vardas', '$pavarde');
                ";
    mysqli_query( getPrisijungimas(), $manoSQL );
}
createDoctor('Tomas', 'Tomkis');

//gydytojo trinimas
function deleteDoctor ($nr) {
    $manosql = 'DELETE FROM doctors 
                       WHERE id=$nr 
                       LIMIT 1;  /*uzdeda limita, kad trins tik viena karta
                ';
}

//redagavimas daktaru
//
function updateDoctor($belekas, $vardas, $pavarde) {
    $vardas = htmlspecialchars($vardas, ENT_QUOTES, 'UTF-8');
    $pavarde = htmlspecialchars($pavarde, ENT_QUOTES, 'UTF-8');

//sprintf vietoj kiekvieno % isves kintamuosius
    $manosql = sprintf("UPDATE doctors 
                           SET name='%s', 
                               lname= '%s'
                           Where id= '%s'
                           LIMIT 1;
                       ",
                        $vardas = htmlspecialchars($vardas, ENT_QUOTES, 'UTF-8'),
                        $pavarde = htmlspecialchars($pavarde, ENT_QUOTES, 'UTF-8'),
                        $nr
                    );
    mysqli_query( getPrisijungimas(), $manosql);
    // sprintf('vakar %s isejo i %s', $vardas, $pavarde );
}
updateDoctor(4, 'Lieva', 'Kieta');

//daug gydytoju paemimas is DB
//
function getDoctors($kiekis = 9999) { //9999 yra defaultine reiksme, jeigu nepaduodi kitokios
    $manosql = "SELECT * FROM doctors ORDER BY name LIMIT $kiekis";
    $rezultatai = mysqli_query( getPrisijungimas(), $manosql);
//tikrinam ar nors viena radom?
    if (mysqli_num_rows($rezultatai) > 0) {
        echo "radome gydytoju";
        //cia nenaudoti mysqli_fetch_assoc, nes jis paima tik viena eilute
        return $rezultatai;
    } else {
        echo "neradome gydytoju";
    }

}
$pirmi_4_gydytojai = getDoctors(4);
// $rezultatai = mysqli_fetch_assoc($rezultatai); 
// 
// is 4 surastu gydytoju paimame pirmaji
$vienasGydytojas = mysqli_fetch_assoc($pirmi_4_gydytojai); 

// while ($vienasGydytojas) {
//     echo $vienasGydytojas['name'] . " " . $vienasGydytojas['lname'] . "<br>";
//     //is 4 surastu gydytoju paimame sekanti
//     $vienasGydytojas = mysqli_fetch_assoc($pirmi_4_gydytojai); 
// }