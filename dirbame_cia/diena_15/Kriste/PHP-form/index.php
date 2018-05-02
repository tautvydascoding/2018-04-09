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
            <h1> Registracijos forma   </h1>

            <!-- 1. sukurti form'a naudojant metoda (GET) ir  su ivedimo laukais:
             vardas, pavarde, telefonas, mygtukas 'registruotis'

            2. kai paspaudzia 'registruotis', vartotoja perkelti i registracija.php faila -->


      <form action="registracija.php" method="get">
        <input type="text" name="vardas" placeholder="Vardas" value=""> <br> <br>
        <input type="text" name="pavarde" placeholder="Pavarde" value=""> <br> <br>
        <input type="tel" name="telefonas" placeholder="Telefonas" value=""> <br> <br>
        <input type="submit" name="" value="Registruotis  "> <br> <br>
      </form>


      <!-- 3. registracija.php faile pasinaudojant globaliu PHP masyvu $_GET atspausdinti vartotojo ivestu duomenis
      pvz.: print_r( $_GET)
      pabandyti papildomai:
      print_r( $GLOBALS) -->




       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js">     </script>

        <!-- !!!  mano js visada zemiau -->
        <script src="main.js">  </script>
    </body>
</html>
