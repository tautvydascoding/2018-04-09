<?php

include_once('doctors_functions_DB.php');

print_r( $_GET );

$vard = $_GET['vardas'];
$pavd = $_GET['pavarde'];
createDoctor( $vard, $pavd );
