<?php

// kartis specialistai uzraso cia data, savo varda, el.pasta. jei kazkas naudos-matys info. gal kazko reiks, tai gali parasyti :))))

// kuriame konstantas (kintamojo vardas (issigalvotas), reiksme);
define('HOST', 'localhost');
define('MYSQL_VARTOTOJAS', 'root');
define('MYSQL_SLAPTAZODIS', 'root');
define('DB_VARDAS', 'Hospital4');

// jungiames prie duomenu bazes: 'Hospital4'
$connection = mysqli_connect( HOST, MYSQL_VARTOTOJAS, MYSQL_SLAPTAZODIS, DB_VARDAS );
// jeigu mysql port pakeistas, tai reikia ji nurodyti;

// pasidarome if s1lyga, kad pasitikrintume ar prisijungeme;
// if ($connection) {
//   echo "Prisijungete sekmingai! <br />";
// } else {
//   echo "ERROR - nepavyko prisijungti <br />";
//   mysqli_connect_error(); //parodo kokia klaida padarai konkreciai;
// }

// kuriame funcija ir i ja ikelia if tikrinima, bei jos viduje coonection kintamaji paskelbiame global, nes jei to nepadarytume, tai kintamojo connection funkcija nepasiektu, nes jis globalus;
function getPrisijungimas() {
  global $connection;
  if ($connection) {
    // echo "Prisijungete sekmingai! <br />";
    return $connection;
  } else {
    echo "ERROR - nepavyko prisijungti <br />";
    mysqli_connect_error(); //parodo kokia klaida padarai konkreciai;
  }
}
getPrisijungimas();

    // FUNKCIJOS
// funkcija GET:
function getDoctor( $nr ) {
  $mano_sql = "SELECT * FROM Doctors
                        WHERE Id = '$nr' ;
              ";
              // uzklausa    (irodymas, kur vykdyti , SQL komanda);
  $rezultatai = mysqli_query( getPrisijungimas(), $mano_sql);
  if ($rezultatai) {
    $rezultatai = mysqli_fetch_assoc($rezultatai);
    // is paduoto mySql objekto paima sekancia eilute ir pavercia i masyva;
    // mysqli_fetch_assoc - apdoroja duomenis; padaro graziai;
    return $rezultatai;
  } else {
    echo "ERROR!! - gydytojo $nr nera ! <br />";
  }
  // var_dump( $rezultatai ); // pasitestavimui;
  // print_r( $rezultatai );
}
$gydytojas = getDoctor(3);
// print_r( $gydytojas );
