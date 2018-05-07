
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Uzklausa priimta</title>
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
          <article class="col-md-12 bg-light border rounded text-center">

            <h1>Sveikiname!<hr /></h1>
            <h4>
            <?php include_once("mailer.php"); ?>
            </h4>

          </article>
        </div>

      </main>








      <?php include("footeris.php") ?>




<script type="text/javascript" src="libs/jquery-3.2.1.min.js"></script>
<script src="main.js">  </script>
</body>
</html>
