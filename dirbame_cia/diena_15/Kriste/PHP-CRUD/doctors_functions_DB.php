<?php

// cia kuriame bilbioteka, kuri turi saugoti funkcijas;

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


        // CRUD
// 1 uzduotis - gydytojo idejimas i duomenu baze - Create;

function createDoctor($vardas, $pavarde) {

// uzkoduojame, kad vartotojas negaletu ivesti kabuciu, kad negaletu isilauzti i musu DB parase savo koda, kuri mes vietoj vardo ikelsime pas save i DB;
$vardas = htmlspecialchars($vardas, ENT_QUOTES, 'UTF-8');
$pavarde = htmlspecialchars($pavarde, ENT_QUOTES, 'UTF-8');

  $manoSQL = "INSERT INTO Doctors
                      VALUES ('', '$vardas', '$pavarde');
              ";
            // prisijungimo irodymas, issigalvotas kintamasis, kuri pasiraseme auksciau, kad lengviau butu susiprorgamuoti query (uzklausa);
  $x = mysqli_query(getPrisijungimas(), $manoSQL);
  if ($x) {
    echo "Pavyko sukurti gydytoja <br />";
  }
  //
}
// createDoctor('Petras', 'Petrauski\"s');
// echo "Petrauski&quot;s"; // html perskaitys ir parasys Petrauski"s, nes uzkodavima perskaitys- tai yra aiski jam kalba;
// createDoctor($_GET['vardas'], $GET['pavarde']); // galime pasiimti vartotojo ivestus duomenis. bet kai svarbi info -naudoti POST;


// 2 uzduotis - gydytojo istrynimas is duomenu bazes - Delete;

function deleteDoctor( $nr ) {
  $manoSQL = "DELETE FROM Doctors
                    WHERE Id=$nr
                    -- LIMIT 1 apsauga, kad tik viena karta padarytu;
                    ;
  ";
  mysqli_query(getPrisijungimas(), $manoSQL);
}
deleteDoctor(16);

// 3 uzduotis - gydytojo redagavimas duomenu bazeje - Update;

function updateDoctor($nr, $vardas, $pavarde) {

      // sprintf - % vietoj kiekvieno %s isves kintamuosius;
  $manoSQL = sprintf( "UPDATE Doctors
                     SET
                     Name = '%s',
                     Lname = '%s'
                     WHERE Id = '%s'
                      ",
            // zemiau isvardiname kintamuosius ir galime iskart ant ju uzdeti sauguma;
              $vardas = htmlspecialchars($vardas, ENT_QUOTES, 'UTF-8'),
              $pavarde = htmlspecialchars($pavarde, ENT_QUOTES, 'UTF-8'),
              $nr
            );
  // paleidziame query (uzklausa), kad vydytu musu uzklausa (manoSQL);
  mysqli_query(getPrisijungimas(), $manoSQL);
}
updateDoctor(4, 'Liepa', 'Vasarele');


// 4 uzduotis - paimti daug gydytoju vienu kartu;

            // default reiksme skliausteliuose ()$kiekis = 9999), jeigu nepaduodi savo reiksmes;
function getDoctors($kiekis = 9999) {
  $manoSQL = "SELECT * FROM Doctors ORDER BY Name LIMIT $kiekis";
  $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);

  //tikriname ar nors viena radom
  if ( mysqli_num_rows($rezultatai) > 0) {
    echo "radom 4 gydytojus <br />";
    // cia negalime naudoti mysqli_fetch_assoc - nes jis paims TIK VIENA  eilute ir ja grazins; visada ims pirma reiksme is lenteles;
    return $rezultatai;
  } else {
    echo "neradom!!!";
  }

}
$pirmi_4_gydytojai = getDoctors(4);
                  // skliausteliuose nurodomas kiekis, o ne Id.

//======================= Panaudojimas GetDoctors;

//is rastu 4 gydytoju paimame pirma ir toliau sekancius is eiles, tiek kiek mes paraseme:
$vienasGydytojas = mysqli_fetch_assoc( $pirmi_4_gydytojai );

// WHILE ciklas tikrina vieninteli dalyka - AR CIA TIESA ??
while ($vienasGydytojas) {
  echo $vienasGydytojas['Name'] . " " . $vienasGydytojas['Lname'] . "<br />" ;
  // is surastu gydytoju paimame vis sekanti; kai jau neberas - sustos ciklas;
  $vienasGydytojas = mysqli_fetch_assoc( $pirmi_4_gydytojai );
}














// atsijungiame nuo duomenu bazes; nebeveiks daug kas, nes is duomenu bazes neveiks duomenu paemimas; ideti i HTML failo apacia!
// mysqli_close( $connection );
