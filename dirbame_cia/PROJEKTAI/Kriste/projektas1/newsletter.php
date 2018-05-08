<?php

include_once('functions.php');

// print_r( $_GET );

$newEmail = $_GET['elPastas'];
createNewsletter( $newEmail );

include('thank-you.php');
