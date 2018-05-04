<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link rel="stylesheet" href="css/master.css">

    <title>Hello, world!</title>
  </head>
  <body> 
    
    <!-- navbar -->


      <div class="container-fluid">
        <nav class="navbar fixed-top navbar-expand-md navbar-light bg-light">
          <a class="navbar-brand" href="#"><!-- <img src="images/logo.png"> -->Logo</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#">Sveiki!<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Paslaugos</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="#">Veiksmas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Susirašom</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>

      <!-- carousel -->


      <div id="carouselExampleIndicators" class="carousel slide container-fluid bg-light" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="images/carousel.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
              <h5>Ramutė</h5>
              <p><i>"Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</i></p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/carousel1.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
              <h5>Martynas</h5>
              <p><i>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</i></p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/carousel2.jpg" alt="Third slide">
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

      <!-- main -->



      <main class="container-fluid bg-light">

        <!-- sveiki (about us) -->
        <div class="row sveiki p-5">

          <div class="col-md-7">
            <p><h2 class="pb-3">sveiki!</h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. <br> Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-md-5">
            nuotraukos
          </div>
        </div>
      
        <!-- veiksmas (gallery) -->
        <div class="row veiksmas bg-light p-0">

          <div class="col-md-3">
            <div class="row aukstis-200 bg-dark">1</div>
            <div class="row aukstis-300 bg-dark">2</div>
          </div>

          <div class="col-md-5">
            <div class="row aukstis-250">
              <div class="col-md-6">
                <div class="row aukstis-150">1.1</div>
                <div class="row aukstis-100">1.2</div>
              </div>
              <div class="col-md-6">1.3</div>
            </div>
            <div class="row aukstis-250">
              <div class="col-md-7">2.1</div>
              <div class="col-md-5">2.3</div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="row aukstis-300 bg-dark">
              <div class="col-md">1.1</div>
              <div class="col-md">1.2</div>
            </div>
            <div class="row aukstis-200 bg-dark">
              2
            </div>
          </div>

        </div>

        <!-- paslaugos -->
        <div class="container-fluid fa-7x d-flex text-center my-5 aukstis-300">
          <div class="container paslaugos d-flex align-items-center">
            <i class="fas fa-sun paslaugosFoto"></i>
            <div class="overlay">
              <div class="text"><h4>dienos kaina</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p></div>
            </div>
          </div>
          <div class="container paslaugos d-flex align-items-center">
            <i class="fas fa-moon paslaugosFoto"></i>
            <div class="overlay">
              <div class="text"><h4>paros kaina</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis.</p></div>
            </div>
          </div>
          <div class="container paslaugos d-flex align-items-center">
            <i class="fas fa-calendar-alt paslaugosFoto"></i>
            <div class="overlay">
              <div class="text"><h4>kelių dienų kaina</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut.</p></div>
            </div>
          </div>
        </div>





      </main>

        <!-- footer -->

      <footer class="container-fluid bg-light">
            <div class="row">
              <div class="col-md-4 bg-success">
                <div class="kontaktas1 row bg-secondary aukstis-200">
                  kontaktas1
                </div>
                <div class="kontaktas2 row bg-success aukstis-200">
                  kontaktas2
                </div>
              </div>

              <div class="col-md-8">
                <div class="adresas row bg-danger aukstis-100">
                  adresas
                </div>
                <div class="socTinklaiZemelapis row">
                  <div class="socTinklai col-md-4 bg-warning aukstis-300 d-flex justify-content-around align-items-center flex-column fa-3x py-4 ">
                    <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook fablack"></i></a>
                    <a href="https://plus.google.com" target="
                    "><i class="fab fa-google-plus-square fablack"></i></a>
                    <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram fablack"></i></a>
                  </div>
                  <div class="zemelapis col-md-8 aukstis-300 p-0">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3635.4454434471986!2d23.89221341339147!3d54.91175671715596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46e718a94f9dafad%3A0x840538a087b31a9d!2sS%C4%85jungos+a.+9%2C+Kaunas+48376!5e0!3m2!1sen!2slt!4v1523983879512"
                      width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                  </div>
                </div>
              </div>
            </div>
      </footer>






















    <!-- Optional JavaScript -->
    <script src="main.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>
