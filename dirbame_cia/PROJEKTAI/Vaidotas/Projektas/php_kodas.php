

<?php // čia bus visas php kodas , duomenų paėmimui ir įdėjimui



define( 'HOST', 'localhost' );
define( 'MYSQL_VARTOTOJAS', 'root' );  // root
define( 'MYSQL_SLAPTAZODIS', 'root' );
define( 'DB_VARDAS', 'etynga' );

// jungiames pr. DB  'hospital4'
 $connection = mysqli_connect( HOST, MYSQL_VARTOTOJAS, MYSQL_SLAPTAZODIS, DB_VARDAS);   // !!! jeigu pas jus pakeistas MYSQL PORT pvz:8889, reik nurodyt
 $connection -> set_charset("utf8mb4");


 // f-ja
 function getPrisijungimas() {
     global $connection; // sioje f-joje naudosime blobalu kintamaji
     if ($connection) {
         // echo "Prisijungėte sėkmingai <br>";
         return $connection;
     } else {
          echo "Klaida:  nepavyko prisijungti prie duomenų bazės <br>" . mysqli_connect_error();
     }
 }
//==============draugu kodas=======================

//paimti draugus

function getDraugai($kiekis = 9999) { // = 9999 - default value, jeigu nenurodei
    $manoSQL = "SELECT * FROM draugai  ORDER BY id  LIMIT $kiekis ";
    $rezultatai = mysqli_query( getPrisijungimas(),  $manoSQL);

      if ( mysqli_num_rows($rezultatai) > 0 ) {
         return $rezultatai;
    } else {
        echo "Draugų nepavyko rasti!!! <br>";
    }
}

//istrinti draugus
function deleteDraugas( $nr ) {
    $manoSQL = "DELETE FROM draugai
                       WHERE id=$nr
                       LIMIT 1;
                ";
    mysqli_query( getPrisijungimas() , $manoSQL);
}

function updateDraugas($nr, $link, $name, $description) {

    // sprintf - % vietoj kiekvieno %s isves kintamuosius
    $manoSQL = sprintf( "UPDATE draugai SET
                                    link = '%s',
                                    name = '%s',
                                    description = '%s'
                                    WHERE id = '%s'
                                    LIMIT 1 ;
                         ",
                  htmlspecialchars( $link, ENT_QUOTES, 'UTF-8' ),
                  htmlspecialchars( $name, ENT_QUOTES, 'UTF-8' ),
                  htmlspecialchars( $description, ENT_QUOTES, 'UTF-8' ),
                  $nr
                 );
}


//============ karuseles kodas======================
function getKaruseleMegzta($kiekis = 9999) { // = 9999 - default value, jeigu nenurodei
    $manoSQL = "SELECT * FROM karusele  WHERE cat='megzta' ORDER BY id  LIMIT $kiekis ";
    $rezultatai = mysqli_query( getPrisijungimas(),  $manoSQL);

      if ( mysqli_num_rows($rezultatai) > 0 ) {
         return $rezultatai;
    } else {
        echo "Karusele tuscia <br>";
    }
}

function getKaruseleNerta($kiekis = 9999) { // = 9999 - default value, jeigu nenurodei
    $manoSQL = "SELECT * FROM karusele  WHERE cat='nerta' ORDER BY id  LIMIT $kiekis ";
    $rezultatai = mysqli_query( getPrisijungimas(),  $manoSQL);

      if ( mysqli_num_rows($rezultatai) > 0 ) {
         return $rezultatai;
    } else {
        echo "Karusele tuscia <br>";
    }
}


function getKaruseleSiuta($kiekis = 9999) { // = 9999 - default value, jeigu nenurodei
    $manoSQL = "SELECT * FROM karusele  WHERE cat='siuta' ORDER BY id  LIMIT $kiekis ";
    $rezultatai = mysqli_query( getPrisijungimas(),  $manoSQL);

      if ( mysqli_num_rows($rezultatai) > 0 ) {
         return $rezultatai;
    } else {
        echo "Karusele tuscia <br>";
    }
}

//===========darbu kodas===============//



function getDarbaiMegzta($kiekis = 9999) { // = 9999 - default value, jeigu nenurodei
    $manoSQL = "SELECT * FROM darbai  WHERE cat='megzta' ORDER BY id  LIMIT $kiekis ";
    $rezultatai = mysqli_query( getPrisijungimas(),  $manoSQL);

      if ( mysqli_num_rows($rezultatai) > 0 ) {
         return $rezultatai;
    } else {
        echo "Nėr megztų darbų! <br>";
    }
}

function getDarbaiNerta($kiekis = 9999) { // = 9999 - default value, jeigu nenurodei
    $manoSQL = "SELECT * FROM darbai  WHERE cat='nerta' ORDER BY id  LIMIT $kiekis ";
    $rezultatai = mysqli_query( getPrisijungimas(),  $manoSQL);

      if ( mysqli_num_rows($rezultatai) > 0 ) {
         return $rezultatai;
    } else {
        echo "Nėr nertu darbų! <br>";
    }
}

function getDarbaiSiuta($kiekis = 9999) { // = 9999 - default value, jeigu nenurodei
    $manoSQL = "SELECT * FROM darbai  WHERE cat='siuta' ORDER BY id  LIMIT $kiekis ";
    $rezultatai = mysqli_query( getPrisijungimas(),  $manoSQL);

      if ( mysqli_num_rows($rezultatai) > 0 ) {
         return $rezultatai;
    } else {
        echo "Nėr nertu darbų! <br>";
    }
}

//=================useriu kurimas===================//


function createUser($nickname, $password, $email) {
    $vardas = htmlspecialchars( $vardas, ENT_QUOTES, 'UTF-8' );
    $pavarde = htmlspecialchars( $pavarde, ENT_QUOTES, 'UTF-8' );
    $email = htmlspecialchars( $pavarde, ENT_QUOTES, 'UTF-8' );

    $manoSQL = "INSERT INTO vartotojai (nickname,password,email,)
                       VALUES ('', '$vardas', '$pavarde');
                ";
    $x = mysqli_query(  getPrisijungimas() , $manoSQL);
    if ($x) {
        echo "Pavyko sukurti vartotoją! <br>";
    }
}


//postinimas uzklausos i duombaze//

function createRequest($vardas, $pavarde, $elpastas, $tel, $komentaras) {
    $vardas = htmlspecialchars( $vardas, ENT_QUOTES, 'UTF-8' );
    $pavarde = htmlspecialchars( $pavarde, ENT_QUOTES, 'UTF-8' );
    $elpastas = htmlspecialchars( $pavarde, ENT_QUOTES, 'UTF-8' );
    $tel = htmlspecialchars( $pavarde, ENT_QUOTES, 'UTF-8' );


    $manoSQL = "INSERT INTO uzklausa (vardas, pavarde, elpastas, tel_nr, komentaras)
                       VALUES ('', '$vardas', '$pavarde',$elpastas, $tel, $komentaras);
                      ";
    $x = mysqli_query(  getPrisijungimas() , $manoSQL);
    if ($x) {
        echo "jūsų komentaras primtas! <br>";
    }
}




// $pirmi_4_draugai = getDraugai(4);
// $rezultatai = mysqli_fetch_assoc($rezultatai);

//==========================panaudojimas====getDoctors==============

// is 4 surastu gydytoju paimmae pirmaji/sekanti
// $vienasDraugas = mysqli_fetch_assoc( $pirmi_4_draugai);
//
// print_r($vienasDraugas);
// while ($vienasDraugas) {
//      echo $vienasDraugas['link'] . " " . $vienasDraugas['name'] . "<br />";
//      // !!! is 4 surastu gydytoju paimmae sekanti
//      $vienasDraugas = mysqli_fetch_assoc( $pirmi_4_draugai );
// }
