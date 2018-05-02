<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Informacija apie gydytoja </title>
        <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.0/normalize.css">
        <link rel="stylesheet" href="libs/bootstrap4/css/bootstrap.css">

        <!-- !!! mano CSS failas visada pats zemiausias -->
        <link rel="stylesheet" href="css/master.css">
    </head>



    <body>
         <h1> Informacija apie gydytoja </h1>
                   
            <?php 
                include_once('doctors_functions_DB.php')
                
                $nr = $_GET['numeris'];
                $gydytojas = getDoctor ($nr);
                print_r($getDoctor);
            ?>
        
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        Nr: <?php echo $gydytojas['id'] ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        vardas pavarde: <?php echo $gydytojas['name'] . " " . $gydytojas['lname'] ?>
                    </div>
                </div>
            </div>
            

           
       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js">     </script>

        <!-- !!!  mano js visada zemiau -->
        <script src="main.js">  </script>
    </body>
</html>
