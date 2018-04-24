<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.0/normalize.css">
        <link rel="stylesheet" href="libs/bootstrap4/css/bootstrap.css">

        <!-- !!! mano CSS failas visada pats zemiausias -->
        <link rel="stylesheet" href="css/master.css">
    </head>



    <body>
            <h1> Isijunk console </h1>

            <!-- // uzduotis 1
            // A. susikurti meniu masyva: home, about, gallery, contact, blog
            // B. atspausdinti visus meniu punktus i HTML (su html tag'ais) -->

<?php

$manoMenu = ["Home", "About", "Gallery", "Contact", "Blog"];

 ?>

<!-- <ul class="nav">
  <li class="nav-item">
    <a class="nav-link" href="#"> <?php echo $manoMenu[0]; ?>   </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#"> <?php echo $manoMenu[1]; ?>  </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#"> <?php echo $manoMenu[2]; ?>  </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#"> <?php echo $manoMenu[3]; ?>  </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#"> <?php echo $manoMenu[4]; ?>  </a>
  </li>
</ul> -->

<!-- buvo galima sutrumpinti paleidziant FOR cikla -->


<nav>
  <ul>
    <?php
      for ($i=0; $i < 5; $i++) {
        echo "<li>  $manoMenu[$i] </li> " ;
      }
     ?>
  </ul>
</nav>



            <!-- // uzduotis 2
            // A. susirasti 6 nuotraukas
            // B. susikurti nuotrauku pavadinimu masyva
            // C. atspausdinti visas nuotraukas su ciklu, po 3-ris i eilute
            // <img src='./img/1.jpg' alt=''  /> -->


<?php

$nuotraukos = [];
// buvo galima iskar suraysti viska i masyva, bet kad prisiminti, tai galima sukurti kiekvienam stalciui atskirai;
$nuotraukos[0] = '1.jpg';
$nuotraukos[1] = '2.jpg';
$nuotraukos[2] = '3.png';
$nuotraukos[3] = '4.jpg';
$nuotraukos[4] = '5.jpg';
$nuotraukos[5] = '6.jpg';

 ?>

<!-- <section>
  <img src="../Images/<?php echo $nuotraukos[0] ?>" alt="nuotrauka" width="30%" />
  <img src="../Images/<?php echo $nuotraukos[1] ?>" alt="nuotrauka" width="30%" />
  <img src="../Images/<?php echo $nuotraukos[2] ?>" alt="nuotrauka" width="30%" />
  <img src="../Images/<?php echo $nuotraukos[3] ?>" alt="nuotrauka" width="30%" />
  <img src="../Images/<?php echo $nuotraukos[4] ?>" alt="nuotrauka" width="30%" />
  <img src="../Images/<?php echo $nuotraukos[5] ?>" alt="nuotrauka" width="30%" />
</section> -->

<!-- kadangi realiai veiksmas kartojasi tai pparasciau ideti i <FOR cikla; -->

<section>
  <?php for ($i=0; $i < 6; $i++) :     ?>
        <img src="../Images/<?php echo $nuotraukos[$i] ?>" alt="nuotrauka" width="30%" />
  <?php  endfor  ?>
</section>












       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js">     </script>

        <!-- !!!  mano js visada zemiau -->
        <script src="main.js">  </script>
    </body>
</html>
