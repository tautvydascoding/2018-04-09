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
            <h1> Isijunk   </h1>

          <?php include_once('doctors_functions_DB.php');




          $visiGydytojai = getDoctors();
          // print_r($visiGydytojai);//test

          while ( $vienasGYD = mysqli_fetch_assoc($visiGydytojai) ) :   ?>
           <!-- paima viena gydytoja,  ima sekanti itema is visu gydytoju ir tikrina while, kol jie egzistuoja is visu itemu; -->
            <h2>

              <a class="btn btn-danger" href="delete_doctor.php?numeris=<?php echo $vienasGYD['id']; ?>">
              DELETE </a>

               <?php echo $vienasGYD['name']; ?>

            </h2>



          <?php endwhile; ?>




       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js">     </script>

        <!-- !!!  mano js visada zemiau -->
        <script src="main.js">  </script>
    </body>
</html>