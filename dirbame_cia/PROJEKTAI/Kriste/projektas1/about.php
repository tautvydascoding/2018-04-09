<?php
include('header.php');
include('functions.php');
 ?>


<!-- start 2 container -->
<div class="container-fluid aukstis-626 pagrindinis-tekstas">

  <!-- start pagrindine eilute -->
  <div class="row">

    <!-- start 1 column -->
    <div class="col-md-7">

      <!-- start 1 row-->
      <div class="row d-flex justify-content-center aukstis-100">
        <div class="col-md-7 main">
          <h4> <br>ABOUT  </h4>
        </div>
      <!-- end 1 row -->
      </div>

      <!-- start 2 row -->
      <div class="row d-flex justify-content-center aukstis-30">
        <div class="col-md-7 main">
          <p>
            __________
          </p>
        </div>
      <!-- end 2 row -->
      </div>

      <!-- start 3 row -->
      <div class="row d-flex justify-content-center ">
        <div class="col-md-7 main">
          <article class="">
            <p>
              <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              <br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </article>
        </div>
      <!-- end 3 row -->
      </div>

      <!-- start 4 row -->
      <div class="row d-flex justify-content-center aukstis-30">
        <div class="col-md-7 main">
          <p>
            __________
          </p>
        </div>
      <!-- end 4 row -->
      </div>
      <!-- end 1 column -->
    </div>

    <!-- start 2 column -->
    <div class="col-md filmukas">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/EcVoIp36g7M" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    <!-- end 2 column -->
    </div>

  <!-- end pagrindine eilute -->
  </div>

</div>
<!-- end 2 container -->


<!-- start 3 containeris -->
<div class="container-fluid">

  <!-- start 1 row -->
  <div class="row d-flex justify-content-center mt-3">
    <!-- start column -->
    <div class="col-md-3 d-flex justify-content-center">
      <h5>FROM OUR DAILY LIFE</h5>
    </div>
    <!-- end column  -->
  </div>
  <!-- end 1 row -->

  <!-- start 2 row -->
  <div class="row d-flex justify-content-center mt-3">
    <!-- start column -->
    <div class="col-md-6 d-flex justify-content-center">
      <!-- start carousel -->
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/Prekes/bracelets/24.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/Prekes/rings/10.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/Prekes/earings/16.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/Prekes/keychains/19.jpg" alt="Forth slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- end carousel -->
    </div>
    <!-- end column  -->
  </div>
  <!-- end 2 row -->

</div>
<!-- end 3 containeris -->





<!-- start 4 containeris -->
<div class="container-fluid">

  <!-- start 1 row -->
  <div class="row d-flex justify-content-center mt-5">
    <!-- start column -->
    <div class="col-md-3 d-flex justify-content-center">
      <h5>BECOME OUR PARTNER</h5>
    </div>
    <!-- end column  -->
  </div>
  <!-- end 1 row -->

  <!-- start 2 row -->
  <div class="row d-flex justify-content-center mt-3">
    <!-- start 1 column -->
    <div class="col-md-3 d-flex justify-content-center tapk-partneriu">
      <article>
        <h6>Add new product</h6>
          <form class="d-flex justify-content-center" action="new-product.php" onsubmit="sekmingaiPateikta() "method="post">
            <div class="new-product">
              <input type="text" name="vardasPart" value="" class="form-control" required placeholder="Username"> <br>
              <input type="email" name="pastasPart" value="" class="form-control" aria-describedby="emailHelp" placeholder="Your email" required> <br>
              <textarea class="form-control" rows="5" cols="50" name="naujasProd" required placeholder="Please describe Your new product here..."></textarea>
              <br>
              <input type="number" name="kaina" value="" class="form-control" required placeholder="Price 0 Eur"> <br>
              <button type="submit" name="" class="btn btn-outline-secondary new-product-add mb-3">Add product!</button>
            </div>
          </form>
      </article>
    </div>
    <!-- end 1 column  -->

    <!-- start 2 column -->
    <div class="col-md-3 d-flex justify-content-center tapk-partneriu">
      <article>
        <h6>Delete Partner</h6>
          <form class="d-flex justify-content-center" action="delete-partner.php" method="get">
            <div class="new-product">
              <input type="text" name="partnerioVardas" value="" class="form-control" required placeholder="Username"> <br>
              <button type="submit" name="" class="btn btn-outline-secondary new-product-add mb-3" onmouseover="this.innerHTML = 'Are You sure- DELETE?'" >Delete</button>
            </div>
          </form>
      </article>
    </div>
    <!-- end 2 column -->

    <!-- start 3 column -->
    <div class="col-md-3 d-flex justify-content-center tapk-partneriu">
      <article>
        <h6>Update information</h6>
        <form action="update-information.php" method="post">
          <input type="email" name="keiciamasEmail" value="" class="form-control" aria-describedby="emailHelp" placeholder="Your email" required> <br>
          <button type="submit" name="" class="btn btn-outline-secondary new-product-add mb-3">Update</button>
        </form>
      </article>
    </div>
    <!-- end 3 column -->

  </div>
  <!-- end 2 row -->
</div>
<!-- end 4 containeris -->



<!-- start 5 containeris -->
<div class="container-fluid">
  <div class="row d-flex justify-content-center mt-5">
    <div class="col-md-3 d-flex justify-content-center">
      <h5>OUR PARTNER PRODUCTS</h5>
    </div>
  </div>

  <!-- start 1 row -->
  <div class="row d-flex justify-content-center mt-3">
    <!-- start 1 column -->
    <div class="col-md-10 partneriu-produkcija">
      <!-- kaip auto isvesti visa imanoma partneriu prooduktu kieki -->
<?php

$partneriai = getPartners(); // matrica, kuri saugo skirtinguose stalciuose kiekvieno obj info;
// var_dump($bracelets);
for ($i=0; $i < count($partneriai); $i++) {
  $partneriuProduktai = $partneriai[$i];
  include('template-category-partners.php');
}
 ?>
    </div>
    <!-- end 1 column -->
  </div>
  <!-- end 1 row -->

</div>
<!-- end 5 containeris -->


<?php
  include('footer.php');
?>
