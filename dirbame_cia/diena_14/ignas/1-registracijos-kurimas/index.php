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
            
            <?php   echo "labas";
                    echo "labas";
                    echo "labas"; 
            ?>
            <form action="registracija.php" method="post"> 
                <input type="text" name="vardas" placeholder="tavo vardas"><br>
                <input type="text" name="pavarde" placeholder="tavo pavarde"><br>
                <input type="tel" name="telefonas" placeholder="tavo telefonas"><br>

                <button type="submit" name="button" onclick=" "> Registruotis </button>
            </form>


       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js">     </script>

        <!-- !!!  mano js visada zemiau -->
        <script src="main.js">  </script>
    </body>
</html>
