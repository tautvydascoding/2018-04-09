<?php

include_once('doctors_functions_DB.php');

$mmm = $_GET['numeris'];
deleteDoctor( $mmm );

echo "<h2 class='bg-danger'> Istrynem gydytoja: $mmm </h2>";
