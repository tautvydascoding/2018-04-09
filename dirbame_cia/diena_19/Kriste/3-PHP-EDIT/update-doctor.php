<?php

include_once('doctors-db.php');

print_r( $_GET );


updateDoctor($_GET['gyd-nr'], $_GET['vardas'], $_GET['pavarde']);
echo "Gydytojas issaugotas!";
