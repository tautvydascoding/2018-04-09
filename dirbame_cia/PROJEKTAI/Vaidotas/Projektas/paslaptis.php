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
            <article class="col-md-3">


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

                  <!-- Prisijungusio info -->
                  <?php  if (isset($_SESSION['username'])) : ?>
                  	<p>Jūs prisijungėte, <strong><?php echo $_SESSION['username']; ?></strong></p>
                  	<p> <a href="prisijungimas.php?logout=1" >logout</a> </p>
                  <?php  endif ?>
              </div>

            </article>


              <article class="col-md-8 mt-4" id="draugai">
                <h2 class="text-align-center">Draugai duombazeje: <hr /></h2>

                <ul>
                  <li> ID * LINK * NAME * DESCRIPTION </li>
                  <?php
                  include_once('php_kodas.php');
                  $visiDraugai = getDraugai();

                  while ( $vienasDraugas = mysqli_fetch_assoc($visiDraugai)  ) :
                    ?>
                  <li> <?php echo $vienasDraugas['id'] ?>*
                        <?php echo $vienasDraugas['link'] ?>*
                        <?php echo $vienasDraugas['name'] ?>*
                        <?php echo $vienasDraugas['description'] ?>*
                        <a class='btn btn-danger' href="delete_update.php?numeris=<?php echo $vienasDraugas['id']; ?>">Trinti</a>

                   </li>
                 <?php  endwhile;  ?>
                </ul>

              </article> <!--uždarau draugų lentą-->

          </div> <!--uždarau row-->


<div class="row mb-5">
  <article class="col-md-3 rounded bg-light mb-5">
    <h3>Pakeiskit draugų info!</h3><br>
    <form name="update" class="" action="delete_update.php" method="post">
      Keičiamas ID <br/>
      <input type="number" name="id" value=""> <br/>
      Keičiamas Name<br/>
      <input type="text" name="name" value=""><br/>
      Keičiamas Link<br/>
      <input type="text" name="link" value=""><br/>
      Keičiamas Description<br/>
      <input type="text" name="description" value=""><br/>
      <button class="btn btn-info" type="submit" name="submitas">KEISTI</button>

    </form>

  </article>



</div>






        </main>




  <?php include("footeris.php") ?>
    </body>

    <script type="text/javascript" src="libs/jquery-3.2.1.min.js"></script>
    <script src="main.js">  </script>
</body>
</html>
