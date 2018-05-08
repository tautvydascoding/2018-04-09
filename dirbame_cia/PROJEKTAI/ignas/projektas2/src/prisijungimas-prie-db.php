<?php


// 2018-05-07
// Ignas

define( 'HOST', 'localhost' );
define( 'MYSQL_VARTOTOJAS', 'root' );  
define( 'MYSQL_SLAPTAZODIS', 'root' );
define( 'DB_VARDAS', 'menu' );

// jungiames pr. DB  'menu'
 $connection = mysqli_connect( HOST, MYSQL_VARTOTOJAS, MYSQL_SLAPTAZODIS, DB_VARDAS); 
 mysqli_set_charset($connection, 'utf8');
 // f-ja
 function getPrisijungimas() {
     global $connection; 
     if ($connection) {
         //echo "Prisijungete sekmingai <br>";
         return $connection;
     } else {
          echo "EROROR  nepavyko prisijungti pr. DB <br>" . mysqli_connect_error();
     }
 }
getPrisijungimas();

// NAVBAR NAMES - START
    function getMenu( $nr ) {
        $mano_sql = "SELECT * FROM menujuosta
                              WHERE id='$nr';
                    ";
    $rezultatai = mysqli_query(  getPrisijungimas()  , $mano_sql);
         if (mysqli_num_rows($rezultatai)  > 0) {
            $rezultatai = mysqli_fetch_assoc($rezultatai);
             return $rezultatai;
        }  else {
            echo "ERROR: menu $nr nera <br />";
        }
    }
// NAVBAR NAMES - END
// 
// 
// CONTACTS - ENDS
    function getContacts( $nr ) {
        $mano_sql = "SELECT * FROM kontaktai
                              WHERE id='$nr';
                    ";
    $rezultatai = mysqli_query(  getPrisijungimas()  , $mano_sql);
         if (mysqli_num_rows($rezultatai)  > 0) {
            $rezultatai = mysqli_fetch_assoc($rezultatai);
             return $rezultatai;
        }  else {
            echo "ERROR: kontaktu $nr nera <br />";
        }
    }
    $contacts = getContacts(1);
// CONTACTS - ENDS
// 
// 
// PASLAUGOS - STARTS

function getPaslaugos( $nr ) {
        $mano_sql = "SELECT * FROM paslaugos
                              WHERE id='$nr';
                    ";
    $rezultatai = mysqli_query(  getPrisijungimas()  , $mano_sql);
         if (mysqli_num_rows($rezultatai)  > 0) {
            $rezultatai = mysqli_fetch_assoc($rezultatai);
             return $rezultatai;
        }  else {
            echo "ERROR: paslaugu $nr nera <br />";
        }
    }
    $paslaugos1 = getPaslaugos(1);
    $paslaugos2 = getPaslaugos(2);
    $paslaugos3 = getPaslaugos(3);







