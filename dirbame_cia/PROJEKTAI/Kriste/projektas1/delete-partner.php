<?php

include_once('functions.php');


$userVardas = $_GET['partnerioVardas'];
deletePartner($userVardas);

// echo "Istrynem  $userVardas <br />";

include('deleted.php');
