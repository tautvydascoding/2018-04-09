<?php
  include('header.php');

  include_once('functions.php');
?>


<!-- start 1 containeris -->
<div class="container-fluid">
  <!-- start 1 row -->
  <div class="row aukstis-100 d-flex align-items-center">
    <!-- start 1 column -->
    <div class="col-md bg-info">
      <h5>EARINGS (suskaiciuoti automatiskai kieki ziedu ir isvesti skaiciu)</h5>
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
    <div class="col-md bg-danger">
      <!-- kkaip apskaiciuoti automatiskai i pradzia ir igli, kad nereiktu ranka rasyti; -->
      <?php
        for ($i=16; $i < 18; $i++) {
          $earings = getEarings($i);
          include('template-category-earings.php');
        }
      ?>
    </div>
    <!-- end 1 column -->
  </div>
  <!-- end 1 row -->
</div>
<!-- end 2 containeris -->




<?php
include('footer.php');
 ?>
