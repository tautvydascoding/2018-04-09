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

<?php
// uzduotis 1
// A. susikurti meniu masyva: home, about, gallery, contact, blog

  $meniu = array("Home", "About", "Gallery", "Contact", "Blog");

  // arba meniu = ["Home", "About", "Gallery", "Contact", "Blog"];
  // B. atspausdinti visus meniu punktus i HTML (su html tag'ais)

 ?>
        <nav>
          <ul>
                 <li> <?php echo $meniu[0] ?> </li>
                 <li> <?php echo $meniu[1] ?> </li>
                 <li> <?php echo $meniu[2] ?> </li>
                 <li> <?php echo $meniu[3] ?> </li>
                 <li> <?php echo $meniu[4] ?> </li>

          </ul>
       </nav>

       <!--arba-->
       <nav>
         <ul>
            <?php
              for ($i=0; $i < count($meniu) ; $i++) {
                echo "<li> $meniu[$i] </li>";
              }

             ?>

         </ul>
      </nav>

      <?php // uzduotis 2
      // A. susirasti 6 nuotraukas

      $nuotraukos = ["1.jpg", "2.jpg", "3.jpg", "4.jpg", "5.jpg", "6.jpg"];

//
      // B. susikurti nuotrauku pavadinimu masyva
      // C. atspausdinti visas nuotraukas su ciklu, po 3-ris i eilute
      // <img src='./img/1.jpg' alt=''  /> ?>

      <section>
        <?php
        for ($i=0; $i < count($nuotraukos); $i++) { ?>
          <img src='img/<?php echo $nuotraukos[$i]?>' alt="nuotrauka_" width="30%">
      <?php } ?>




          <!-- <img src="img/1.jpg" alt="nuotrauka_1" width="30%"> -->
      </section>


       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js">     </script>

        <!-- !!!  mano js visada zemiau -->
        <script src="main.js">  </script>
    </body>
</html>
