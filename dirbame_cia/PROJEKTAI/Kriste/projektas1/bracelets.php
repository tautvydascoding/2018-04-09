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
      <h5>BRACELETS</h5>
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
        $bracelets = getBracelets(); // matrica, kuri saugo skirtinguose stalciuose kiekvieno obj info;
        // var_dump($bracelets);
        for ($i=0; $i < count($bracelets); $i++) {
          $oneBracelet = $bracelets[$i];
          include('template-category-bracelets.php');
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
