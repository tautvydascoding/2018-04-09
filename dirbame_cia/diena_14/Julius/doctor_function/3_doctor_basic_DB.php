<?php


//2018 - 04 - 26
//julius



//
function getDoctor( $nr ) {
  $mano_sql = "SELECT * FROM doctors
        WRERE id='$nr';
        ";

        //        irodymas       SQL komandos
        $rezultatai = mysqli_query( getPrisijungimas() , $mano_sql);
        var_dump( $resultatai );
        //MYSQL OBJEKTA
        $rezultatai = mysqli_fetch_assoc($rezultatai);
        print_r( $rezultatai );
}
getDoctor(2);
