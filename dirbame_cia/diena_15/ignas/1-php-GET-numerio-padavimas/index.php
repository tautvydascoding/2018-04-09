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
            

            <?php 
                include_once('doctors_functions_DB.php');
                $gyd =getDoctor(1);
                // print_r($gyd);
                // echo "<h2>" . $gyd['name'] . "</h2>";

            ?>

                <h2>
                    <a href="template_gyd.php?numeris=1"> 
                        Tim
                        <!-- ?numeris=1 atsiras template_gyd.php  -->
                    </a>
                </h2>                
                <h2>
                    <a href="template_gyd.php?numeris=2"> 
                        Paul
                        <!-- ?numeris=1 atsiras template_gyd.php  -->
                    </a>
                </h2>                
                <h2>
                    <a href="template_gyd.php?numeris=3"> 
                        Ona
                        <!-- ?numeris=1 atsiras template_gyd.php  -->
                    </a>
                </h2>

       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js">     </script>

        <!-- !!!  mano js visada zemiau -->
        <script src="main.js">  </script>
    </body>
</html>
