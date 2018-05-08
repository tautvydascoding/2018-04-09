<?php
  include('header.php');
  include('functions.php');

  $nr = $_GET['numeris'];
  // print_r($nr);
  $item = getPreke($nr);
?>


<!-- start 1 conteiner -->
<div class="container-fluid">
  <!-- start 1 row -->
  <div class="row d-flex justify-content-center aukstis-466">

    <!-- start 1 column -->
    <div class="col-md-6 mt-4 d-flex justify-content-center">
      <img class="py-3 img-fluid" src=<?php echo $item['foto']; ?>>
    </div>
    <!-- end 1 column -->

    <!-- start 2 column -->
    <div class="col-md-3 mt-4">

      <h5 class="pt-3 font-weight-bold"><?php echo $item['title']; ?></h5>

      <h6 class="pb-5">Price: <?php echo $item['price']; ?>&euro;</h6>

      <button type="submit" class="mdl-chip mdl-chip--contact mt-5 ml-3">
        <div class="mdl-chip__contact mdl-color--grey mdl-color-text--black fa fa-shopping-cart"></div>
        <div class="mdl-chip__text font-weight-bold">Buy now!</div>
      </button>

      <button type="submit" class="mdl-chip mdl-chip--contact ml-4">
        <div class="mdl-chip__contact mdl-color--grey mdl-color-text--black fa fa-question"></div>
        <div class="mdl-chip__text font-weight-bold">Ask question!</div>
      </button>

    </div>
    <!-- end 2 column -->

  </div>
  <!-- end 1 row -->
</div>
<!-- end 1 conteiner -->



<!-- start 2 conteiner -->
<div class="container-fluid">

  <!-- start 1 row -->
  <div class="row d-flex justify-content-center">
    <div class="col-md-9 my-2">
      <?php echo $item['description']; ?>
    </div>
  </div>
  <!-- end 1 row -->

  <!-- start 2 row -->
  <div class="row d-flex justify-content-center">
    <!-- start 1 column -->
    <div class="col-md-9 mt-2">

      <!-- start collapse -->
      <p>
        <a class="btn btn-outline-secondary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Dimensions</a>
        <button class="btn btn-outline-secondary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Material</button>
      </p>
      <div class="row">
          <div class="collapse multi-collapse" id="multiCollapseExample1">
            <div class="card card-body">
              <?php echo $item['dimensions']; ?>
            </div>
          </div>

          <div class="collapse multi-collapse" id="multiCollapseExample2">
            <div class="card card-body">
              <?php echo $item['material']; ?>
            </div>
          </div>
      </div>
      <!-- end collapse -->

    </div>
    <!-- end 1 column -->
  </div>
  <!-- end 2 row -->

</div>
<!-- end 2 conteiner -->




<?php
include('footer.php');
 ?>
