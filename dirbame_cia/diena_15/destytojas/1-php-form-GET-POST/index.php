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

        <form   action="registracija.php" method="get ">
            <input type="text"    name="vardas" placeholder="Jusu vardas">
            <input type="text"   name="pavarde" placeholder="Jusu pavarde">
            <input type="number" name="tel" placeholder="Jusu telefonas">

            <input type="submit"  onclick=" suma(10,20) " value="Registruotis">
            <!-- arba -->
            <button type="submit" name="button">
                 Registruotis
            </button>
        </form>

       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js">     </script>

        <!-- !!!  mano js visada zemiau -->
        <script src="main.js">  </script>
    </body>
</html>
