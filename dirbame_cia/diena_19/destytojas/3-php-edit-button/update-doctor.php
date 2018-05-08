<?php


include_once('libs/doctors_functions_DB.php');

print_r( $_GET );

updateDoctor($_GET['gyd-nr'],   $_GET['vardas'],    $_GET['pavarde']);

echo "Gydytojas issaugotas sekmingai!<br />";
