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
            <h1> turite klausimu? </h1>
            <form class="" action="email-siuntimas.php" method="post">
                <input type="text" name="vardas" placeholder="vardas"><br>
                <textarea name="klausimas" rows="8" cols="80" placeholder="jusu klausimas" required=""></textarea><br>
                <input type="text" name="pastas" placeholder="el. pastas" required=""><br>
                <button class="submit" name="" value="klausti">klausti</button>

            </form>



       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js">     </script>

        <!-- !!!  mano js visada zemiau -->
        <script src="main.js">  </script>
    </body>
</html>
