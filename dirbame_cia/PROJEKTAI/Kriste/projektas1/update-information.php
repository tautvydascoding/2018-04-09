<?php
include('header.php');

include_once('functions.php');

// print_r( $_POST );

$pastK = $_POST['keiciamasEmail'];

$vartotojas = getSpecPartner($pastK);
// print_r($vartotojas);

?>


 <!-- start 2 container -->
 <div class="container-fluid">
   <!-- start 1 row -->
   <div class="row my-5 aukstis-466">
     <!-- start 1 column -->
     <div class="col-md d-flex justify-content-center">
       <form class="d-flex justify-content-center" action="update-partner.php" method="get">
         <div class="new-product">
           <p>Username</p>
           <input type="text" name="keiciamasVardas" value="<?php echo $vartotojas['name']; ?>" class="form-control">
           <br>
           <input type="hidden" name="keiciamasEmail" value="<?php echo $vartotojas['email']; ?>" class="form-control" aria-describedby="emailHelp" required> <br>
           <p>Your product</p>
           <textarea class="form-control" rows="5" cols="50" name="keiciamasProduktas"><?php echo $vartotojas['product'] ?></textarea>
           <br>
           <p>Price</p>
           <input type="number" name="keiciamaKaina" value="<?php echo $vartotojas['price']; ?>" class="form-control"> <br>
           <button type="submit" name="" class="btn btn-outline-secondary new-product-add mb-3">Save</button>
         </div>
       </form>
     </div>
     <!-- end 1 column -->
   </div>
   <!-- end 1 row -->
 </div>
 <!-- end 2 container -->










 <?php
 include('footer.php');
  ?>
