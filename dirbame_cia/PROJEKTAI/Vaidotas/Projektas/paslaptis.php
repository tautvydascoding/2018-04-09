<?php
  session_start();

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: prisijungimas.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: prisijungimas.php");
  }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Paslaptingas puslapis</title>
        <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.0/normalize.css">
        <link rel="stylesheet" href="libs/bootstrap4/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- !!! mano CSS failas visada pats zemiausias -->
        <link rel="stylesheet" href="css/main.css">
    </head>

    <body>
      <?php include('headeris2.php') ?>
<main class="container">
  <div class="row">
    <article class="col-md-12">


      <div class="header">
	         <h2>Sveiki atvykę</h2>
    </div>

      <div class="content">
        	<!-- notification message -->
        	<?php if (isset($_SESSION['success'])) : ?>
            <div class="error success" >
            	<h3>
                <?php
                	echo $_SESSION['success'];
                	unset($_SESSION['success']);
                  // session_unset();
                ?>
            	</h3>
            </div>
        	<?php endif ?>

          <!-- logged in user information -->
          <?php  if (isset($_SESSION['username'])) : ?>
          	<p>Sveiki atvykę <strong><?php echo $_SESSION['username']; ?></strong></p>
          	<p> <a href="index2.php" >logout</a> </p>
          <?php  endif ?>
      </div>

    </article>
  </div>

</main>








  <?php include("footeris.php") ?>
    </body>

    <script type="text/javascript" src="libs/jquery-3.2.1.min.js"></script>
    <script src="main.js">  </script>
</body>
</html>
