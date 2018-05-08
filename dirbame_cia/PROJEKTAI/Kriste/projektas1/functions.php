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


function getRings() {
    $mano_sql = "SELECT * FROM items
                          WHERE category='rings';
                ";
    //                             irodymas            SQL komandos
    $rezultatai = mysqli_query(  getPrisijungimas()  , $mano_sql);
    // var_dump($rezultatai); // test

    // mysqli_num_rows - suskaiciuoja kiek radai gydytoju
    if (mysqli_num_rows($rezultatai)  > 0) {
        // mysqli_fetch_assoc  - apdoroje duomenis
        // is paduoto MYSQL objekto paima sekancia eilute ir pavercia i masyva
      $rezArray = [];
        while ($r = mysqli_fetch_assoc($rezultatai)) {
          array_push($rezArray, $r);
        }
        return $rezArray;
      }  else {
        echo "ERROR: rings nerasta <br />";
        }
  }

function getBracelets() {
    $mano_sql = "SELECT * FROM items
                          WHERE category='bracelets';
                ";
    //                             irodymas            SQL komandos
    $rezultatai = mysqli_query(  getPrisijungimas()  , $mano_sql);
    // var_dump($rezultatai); // test

    // mysqli_num_rows - suskaiciuoja kiek radai gydytoju
    if (mysqli_num_rows($rezultatai)  > 0) {
        // mysqli_fetch_assoc  - apdoroje duomenis
        // is paduoto MYSQL objekto paima sekancia eilute ir pavercia i masyva
    $rezArray = [];
      while ($r = mysqli_fetch_assoc($rezultatai)) {
        array_push($rezArray, $r);
      }
      return $rezArray;
    }  else {
        echo "ERROR: bracelets nerasta <br />";
    }
}

function getKeychains() {
    $mano_sql = "SELECT * FROM items
                          WHERE category='keychains';
                ";
    //                             irodymas            SQL komandos
    $rezultatai = mysqli_query(  getPrisijungimas()  , $mano_sql);
    // var_dump($rezultatai); // test

    // mysqli_num_rows - suskaiciuoja kiek radai gydytoju
    if (mysqli_num_rows($rezultatai)  > 0) {
        // mysqli_fetch_assoc  - apdoroje duomenis
        // is paduoto MYSQL objekto paima sekancia eilute ir pavercia i masyva
        $rezArray = [];
          while ($r = mysqli_fetch_assoc($rezultatai)) {
            array_push($rezArray, $r);
          }
          return $rezArray;
        }  else {
            echo "ERROR: keychains nerasta <br />";
        }
    }

//
function getEarings() {
    $mano_sql = "SELECT * FROM items
                          WHERE category='earings';
                ";
    //                             irodymas            SQL komandos
    $rezultatai = mysqli_query(  getPrisijungimas()  , $mano_sql);
    // var_dump($rezultatai); // test

    // mysqli_num_rows - suskaiciuoja kiek radai gydytoju
    if (mysqli_num_rows($rezultatai)  > 0) {
        // mysqli_fetch_assoc  - apdoroje duomenis
        // is paduoto MYSQL objekto paima sekancia eilute ir pavercia i masyva
        $rezArray = [];
          while ($r = mysqli_fetch_assoc($rezultatai)) {
            array_push($rezArray, $r);
          }
          return $rezArray;
        }  else {
            echo "ERROR: earings nerasta <br />";
        }
    }

    function getPreke( $nr ) {
        $mano_sql = "SELECT * FROM items
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
            echo "ERROR: prekes $nr nera <br />";
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
    // echo "Pavyko sukurti newsletter vartotoja <br />";
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
    // echo "Pavyko sukurti klausima <br />";
  }
  else {
    echo "NEPAVYKO!!!";
  }
}

//
function createNewProduct($vardasPart, $pastasPasrt, $naujasProd, $kaina) {

$vardasPart = htmlspecialchars($vardasPart, ENT_QUOTES, 'UTF-8');
$pastasPasrt = htmlspecialchars($pastasPasrt, ENT_QUOTES, 'UTF-8');
$naujasProd = htmlspecialchars($naujasProd, ENT_QUOTES, 'UTF-8');
$kaina = htmlspecialchars($kaina, ENT_QUOTES, 'UTF-8');

  $manoSQL = "INSERT INTO partneriai
                      VALUES ('', '$vardasPart', '$pastasPasrt', '$naujasProd', '$kaina');
              ";
  $x = mysqli_query(getPrisijungimas(), $manoSQL);
  if ($x) {
    // echo "Pavyko sukurti nauja produkta <br />";
  }
  else {
    echo "NEPAVYKO ikelti!!!";
  }
}

//
function getPartners() {
    $mano_sql = "SELECT * FROM partneriai
                          LIMIT 10;
                ";
    //                             irodymas            SQL komandos
    $rezultatai = mysqli_query(  getPrisijungimas()  , $mano_sql);
    // var_dump($rezultatai); // test

    // mysqli_num_rows - suskaiciuoja kiek radai gydytoju
    if (mysqli_num_rows($rezultatai)  > 0) {
        // mysqli_fetch_assoc  - apdoroje duomenis
        // is paduoto MYSQL objekto paima sekancia eilute ir pavercia i masyva
        $rezArray = [];
          while ($r = mysqli_fetch_assoc($rezultatai)) {
            array_push($rezArray, $r);
          }
          return $rezArray;
        }  else {
            echo "ERROR: earings nerasta <br />";
        }
    }


function deletePartner( $partnerioVardas ) {

  $partnerioVardas = htmlspecialchars($partnerioVardas, ENT_QUOTES, 'UTF-8');

  $manoSQL = "DELETE FROM partneriai
                    WHERE name='$partnerioVardas'
                    ;
  ";
  mysqli_query(getPrisijungimas(), $manoSQL);
}

//
function getSpecPartner( $elektroninisPastas ) {
    $mano_sql = "SELECT * FROM partneriai
                          WHERE email='$elektroninisPastas';
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
        echo "ERROR: partnerio $elektroninisPastas nera <br />";
    }
}

function updatePartner($keiciamasVardas, $keiciamasEmail, $keiciamasProduktas, $Keiciamakaina) {

      // sprintf - % vietoj kiekvieno %s isves kintamuosius;
  $manoSQL = sprintf( "UPDATE partneriai
                     SET
                      name = '%s',
                      product = '%s',
                      price = '%s'
                     WHERE email = '%s'
                      ",
            // zemiau isvardiname kintamuosius ir galime iskart ant ju uzdeti sauguma;
            $keiciamasVardas = htmlspecialchars($keiciamasVardas, ENT_QUOTES, 'UTF-8'),
            $keiciamasProduktas = htmlspecialchars($keiciamasProduktas, ENT_QUOTES, 'UTF-8'),
            $Keiciamakaina = htmlspecialchars($Keiciamakaina, ENT_QUOTES, 'UTF-8'),
            $keiciamasEmail = htmlspecialchars($keiciamasEmail, ENT_QUOTES, 'UTF-8')
            );
  // paleidziame query (uzklausa), kad vydytu musu uzklausa (manoSQL);
  mysqli_query(getPrisijungimas(), $manoSQL);
}
