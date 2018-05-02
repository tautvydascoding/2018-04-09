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

        <form  action="email-siuntimas.php" method="post">
            <label for="vardas">  Jusu vardas </label> <br />
            <input type="text" name="vardas"  >  <br />

            <label for="klausimas">  Jusu Klausimas </label> <br />
            <textarea name="klausimas" rows="8" cols="80" required></textarea>   <br />

            <label for="pastas">  Jusu El. pastas </label> <br />
            <input type="email" name="pastas"  required>  <br />

            <input type="submit" name="" value="Klausti">
        </form>




       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js">     </script>

        <!-- !!!  mano js visada zemiau -->
        <script src="main.js">  </script>
    </body>
</html>
