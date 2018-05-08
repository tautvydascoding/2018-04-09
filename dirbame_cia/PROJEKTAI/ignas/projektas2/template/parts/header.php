<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/master.css">

    <title>Hello, world!</title>
  </head>
  <body data-spy="scroll" data-target=".navbar" data-offset="50">  
    
<!-- NAVBAR - STARTS -->

      <div class="container-fluid">
        <nav class="navbar fixed-top navbar-expand-md navbar-light bg-light fill">
          <a class="navbar-brand" href="#">Logo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
              <?php 
                  $menu1 = getMenu(1);
                  $menu2 = getMenu(2);
                  $menu3 = getMenu(3);
                  $menu4 = getMenu(4);
               ?>
              <li class="nav-item">
                <a class="nav-link active" href="#sveiki"><?php echo $menu1["title"]; ?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#veiksmas"><?php echo $menu2["title"]; ?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#paslaugos"><?php echo $menu3["title"]; ?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#susirasom"><?php echo $menu4["title"]; ?></a>
              </li>
            </ul>
          </div>
        </nav>
      
<!-- NAVBAR - ENDS -->

<!-- CAROUSEL - STARTS -->


      <div id="carouselExampleIndicators" class="carousel slide bg-light px-0" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="../assets/images/carousel1.png" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
              <h5>Ramutė</h5>
              <p><i>"Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</i></p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="../assets/images/carousel2.png" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
              <h5>Martynas</h5>
              <p><i>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</i></p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="../assets/images/carousel3.png" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
              <h5>Karolis</h5>
              <p><i>"Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur."</i></p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

<!-- CAROUSEL - ENDS -->