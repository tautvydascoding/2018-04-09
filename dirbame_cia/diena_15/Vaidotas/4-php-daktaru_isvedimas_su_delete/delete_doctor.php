<?php


include_once('doctors_functions_DB.php');


$mmm = $_GET['numeris'];
deleteDoctor($mmm);

echo "Istryniau gydytoja <br />";
