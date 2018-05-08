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
      <h5>KEYCHAINS</h5>
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
      <!-- kkaip apskaiciuoti automatiskai i pradzia ir igli, kad nereiktu ranka rasyti; -->
      <?php
        $keychains = getKeychains(); // matrica, kuri saugo skirtinguose stalciuose kiekvieno objekto info;
        // var_dump($keychains);
        for ($i=0; $i < count($keychains); $i++) {
          $oneKeychain = $keychains[$i];
          include('template-category-keychains.php');
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
