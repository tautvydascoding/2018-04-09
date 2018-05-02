<?php

include_once('doctors_functions_DB.php');


print_r( $_GET );
// print_r( $_POST );

$vard =  $_GET['vardas'];
$pavd =   $_GET['pavarde'];


createDoctor( $vard, $pavd);
