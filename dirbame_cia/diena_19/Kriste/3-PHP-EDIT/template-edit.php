
<?php

// kad hackeris nenulauztu, reiktu tikrinti ar prisijunges ir ar tai tikrai tas zmogus;

// if(admin || savininkas) {
  // tada cia sudedi visa savo koda, kuri zemiau codinom;
// }


include_once('doctors-db.php');

echo $_GET['numeris']; //test ar gauname daktaro numeri;
$nr =  $_GET['numeris'];

$gyd = getDoctor($nr);
// print_r($gyd); // test ar gauname duomenis;

 ?>

<form class="" action="update-doctor.php" method="get">
  <input type="text" name="vardas" value="<?php echo $gyd['Name']; ?>">
  <input type="text" name="pavarde" value="<?php echo $gyd['Lname']; ?>">

  <!-- nematomas vartotojui laukas (type=hidden), bet mums labai reikalingas, kad galetume paimti gydytojo id -->
  <input type="hidden" name="gyd-nr" value="<?php echo $gyd['Id']; ?>">

  <input type="submit" name="" value="Save">
</form>
