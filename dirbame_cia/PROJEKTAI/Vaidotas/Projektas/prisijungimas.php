<?php include('server.php'); ?>
<?php   if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);

}?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Prisijungimas </title>
        <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.0/normalize.css">
        <link rel="stylesheet" href="libs/bootstrap4/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- !!! mano CSS failas visada pats zemiausias -->
        <link rel="stylesheet" href="css/main.css">
    </head>

    <body>
      <?php include('headeris2.php') ?>


<div class="container mb-5">
  <main class="row">


    <div class="col-md-6 plotis-45 mx-auto">


      <form id="prisijungimas" name="prisijungimas" action="prisijungimas.php" method="post">

        <?php include('errors.php'); ?>

          <div class="input-group">
  		      <label>Vartotojas</label>
  		      <input type="text" name="username">
  	      </div>

  	        <div class="input-group">
  		      <label>Slaptažodis</label>
  		    <input type="password" name="password">
  	     </div>

  	      <div class="input-group">
  		   <button type="submit" class="btn" name="login_user">Prisijungti</button>
  	    </div>

      </form>

    </div>
  </main>

</div>






    </body>
    <?php include("footeris.php") ?>
    <script type="text/javascript" src="libs/jquery-3.2.1.min.js"></script>
    <script src="main.js">  </script>
</body>
</html>
