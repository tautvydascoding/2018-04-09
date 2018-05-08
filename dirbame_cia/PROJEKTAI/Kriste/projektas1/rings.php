<?php
  include('header.php');

  include_once('functions.php');
?>


<!-- start 1 containeris -->
<div class="container-fluid">
  <!-- start 1 row -->
  <div class="row aukstis-100 d-flex align-items-center">
    <!-- start 1 column -->
    <div class="col-md">
      <h5>RINGS</h5>
    </div>
    <!-- end 1 column -->
  </div>
  <!-- end 1 row -->
</div>
<!-- end 1 containeris -->


<!-- start 2 containeris -->
<div class="container-fluid">
  <!-- start 1 row -->
  <div class="row">
    <!-- start 1 column -->
    <div class="col-md">
      <?php
        $rings = getRings(); // matrica, kuri saugo skirtinguose stalciuose kiekvieno objekto info;
        // var_dump($rings);
        for ($i=0; $i < count($rings); $i++) {
          $oneRing = $rings[$i];
          include('template-category-rings.php');
        }
      ?>
    </div>
    <!-- end 1 column -->
  </div>
  <!-- end 1 row -->
</div>
<!-- end 2 containeris -->



<!-- $numeris = $_GET['numeris'];
//echo $numeris;
$gydytojas = getDoctor($numeris);
//print_r($gydytojas); -->

  <!-- <div class="row">
      <div class="col-md-12">
      <a href="index.php">Atgal i sarasa</a>
      </div>
  </div> -->




<?php
include('footer.php');
 ?>
