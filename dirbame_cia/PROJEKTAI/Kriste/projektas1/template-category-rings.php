
<?php
// var_dump($rings);

// print_r($oneRing);





 ?>



<a href="item-template.php?numeris=<?php echo $oneRing['id']; ?>">
  <div class="card mb-2 ml-2 float-left" style="width: 22rem;">
    <img class="card-img-top" src=<?php echo $oneRing['foto']; ?>>
    <div class="card-body text-center">
      <p class="card-title font-weight-bold"><?php echo $oneRing['title']; ?></p>
      <p class="card-text"><?php echo $oneRing['price']; ?> &euro; </p>
    </div>
  </div>
</a>
