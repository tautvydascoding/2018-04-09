<?php
// if( admin || savininkas ){

    // echo $_GET['numeris']; // testas
    include_once('libs/doctors_functions_DB.php');

    $nr =  $_GET['numeris'];
    $gyd = getDoctor( $nr );

    // print_r( $gyd ); // test
 ?>

<form  action="update-doctor.php" method="get">
    <input type="text" name="vardas"  value="<?php   echo $gyd['name']   ?>">
    <input type="text" name="pavarde" value="<?php   echo $gyd['lname']  ?>">

    <input type="hidden" name="gyd-nr" value="<?php   echo $gyd['id']  ?>">

    <input type="submit" name="" value="Issaugoti">
</form>
