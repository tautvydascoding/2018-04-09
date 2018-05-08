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
            <!-- <h1> Isijunk   </h1> -->

            <form class="d-flex justify-content-center" action="#" method="post">
              <h3 id="error-zinute" class="bg-warning"> </h3>
              <div class="form-group">
                <input type="text" name="vardas" value="" class="form-control" required placeholder="Your name"> <br>
                <input type="email" name="pastas" value="" class="form-control" aria-describedby="emailHelp" placeholder="Your email" required> <br>
                <input type="number" name="amzius" value="" class="form-control" placeholder="Your age" required> <br>
                <button type="submit" name="mygtukas" class="btn btn-outline-secondary siuntimo-mygtukas">Send message!</button>
              </div>
            </form>




       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="libs/jquery-3.2.1.min.js">     </script>

        <!-- !!!  mano js visada zemiau -->
        <script src="main.js">  </script>
    </body>
</html>
