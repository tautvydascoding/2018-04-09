<?php

include_once('functions.php');

// print_r( $_GET );


updatePartner($_GET['keiciamasVardas'], $_GET['keiciamasEmail'], $_GET['keiciamasProduktas'], $_GET['keiciamaKaina']);


// echo "Pakeitimas issaugotas!";

include('updated.php');
