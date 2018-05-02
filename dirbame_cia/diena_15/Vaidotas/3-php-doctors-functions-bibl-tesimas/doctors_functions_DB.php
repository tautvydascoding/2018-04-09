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


function createDoctorMINI($vardas, $pavarde){
  $manoSQL = "INSERT INTO doctors (name, lname) VALUES ('$vardas', '$pavarde');";

  mysqli_query(getPrisijungimas(), $manoSQL);
}

//createDoctorMINI('Tomas','Tomauskis'); --funkcija kaskart sukuria nauja daktara!

function createDoctor($vardas, $pavarde){
  $vardas = htmlspecialchars($vardas, ENT_QUOTES, UTF-8);// uzkoduoja html kabutes
  $pavarde = htmlspecialchars($pavarde, ENT_QUOTES, UTF-8);// uzkoduoja html kabutes


  $manoSQL = "INSERT INTO doctors (name, lname) VALUES ('$vardas', '$pavarde');";

  $x = mysqli_query(getPrisijungimas(), $manoSQL);

  if ($x) {
    echo "Pavyko sukurti gydytoja!<br>";
  }
}

//createDoctor('Petras','Petry/"la');


function deleteDoctor($nr){
  $manoSQL = "DELETE FROM doctors WHERE id=$nr LIMIT 1;";

  $x = mysqli_query(getPrisijungimas(), $manoSQL);

  if ($x) {
    echo "Gydytojas su id ".$nr." istrintas!";
  }
}
//deleteDoctor(); funkcija istrina daktara pagal id;

function updateDoctor($nr, $vardas, $pavarde){
// sprintf - % vietoj kiekvieno %s isves kintamuosius is eiles
// %s -s - string, f- (float) skaicius su kableliu;
  $manoSQL = sprintf("UPDATE doctors SET
              name='%s',
              lname='%s'
              WHERE id=%s
              LIMIT 1;",
            htmlspecialchars($vardas, ENT_QUOTES, UTF-8),// uzkoduoja html kabutes, $pavarde, $nr);
            htmlspecialchars($pavarde, ENT_QUOTES, UTF-8),// uzkoduoja html kabutes
            $nr);

  $x = mysqli_query(getPrisijungimas(), $manoSQL);

  if ($x) {
    echo "Gydytojas nr $nr updeitintas!<br>";
  }
}
//updateDoctor(5,"Korintijus","Pita");


//daug gydytoju paemimas

function getDoctors($kiekis = 9999){ //default value, jeigu nenurodei funkcijoje bus 9999
  $manoSQL = "Select * FROM doctors ORDER BY id LIMIT $kiekis";
  $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL);

  //tikriname ar nors viena rado
  if ( mysqli_num_rows($rezultatai) > 0) {

    echo "radome gydytoju:<br />";
    // cia nenaudojam msqli_fetch, nes gris tik vieno gydytojo eilute (1)
    return $rezultatai;
    // code...
  }else{
    echo "Gydytoju nepavyko rasti! <br />";
  }
}

$pirmi_4_Gydytojai = getDoctors(1000);
$rezultatai = mysqli_fetch_assoc($rezultatai);

//=====================panaudojimas getDoctors==========================//
// is 4 gydytoju paimame pirma/sekanti gydytoja:
$vienasGydytojas = mysqli_fetch_assoc($pirmi_4_Gydytojai);

while ($vienasGydytojas) {
  echo $vienasGydytojas['name']." ". $vienasGydytojas['lname']."<br />"; // spausdinam
  // !!!!! jeigu nebus salygos, veiks amzinai
  $vienasGydytojas = mysqli_fetch_assoc($pirmi_4_Gydytojai); // mysqli_fetch_ima kita elementa
}







// mysqli_close($connection); !!!!!!------atjungia nuo DB!, ideti i HTML failo apacia!!!!!!








//
