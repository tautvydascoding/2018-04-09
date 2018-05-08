<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "whereisfestival";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, title, description, date_festival_from, date_festival_to, image, city, country FROM festivals";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Where is festival?</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css">


    <!-- Custom styles for this template -->
    <link href="css/agency.css" rel="stylesheet">


  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Where is festival?</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Search</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#upcoming">Upcoming</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Welcome To My New Website!</div>
          <div class="intro-heading text-uppercase">It's Nice To Meet You</div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#portfolio">Discover Festivals</a>
        </div>
      </div>
    </header>

    <!-- Festivals Grid -->
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Search Festivals</h2>
            <h3 class="section-subheading text-muted">Search by date, city, category...</h3>


            <div>
              <button type="button" class="btn btn-lg btn-success" aria-haspopup="true" aria-expanded="false">
                <span data-toggle="modal" href="#addNewModal"><i class="fa fa-plus"></i> Add New</span>
              </button>

              <div class="dropdown">
                <div class="btn-group">
                  <button type="button" class="btn btn-lg btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Country
                  </button>
                  <ul class="dropdown-menu dropdown-content" role="menu" aria-labelledby="dropdownMenu">
                    <li><a class="dropdown-item" tabindex="-1" href="#">Malaysia (Coming Soon)</a></li>
                    <li><a class="dropdown-item" tabindex="-1" href="#">Thailand</a></li>
                    <li><a class="dropdown-item" tabindex="-1" href="#">Vietnam (Coming Soon)</a></li>
                    <li class="dropdown-divider"></li>
                    <li><a class="dropdown-item" tabindex="-1" href="#">Columbia (Coming Soon)</a></li>
                  </ul>
                </div>
              </div>
              <div class="dropdown">
                <div class="btn-group">
                  <button type="button" class="btn btn-lg btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    City
                  </button>
                  <ul class="dropdown-menu dropdown-content active" role="menu" aria-labelledby="dropdownMenu">
                    <li><a class="dropdown-item" tabindex="-1" href="#" data-filter="*">All</a></li>
                    <li><a class="dropdown-item" tabindex="-1" href="#" data-filter=".Bangkok">Bangkok</a></li>
                    <li><a class="dropdown-item" tabindex="-1" href="#" data-filter=".Chiang Mai">Chiang Mai</a></li>
                    <li><a class="dropdown-item" tabindex="-1" href="#" data-filter=".Phuket">Phuket</a></li>
                  </ul>
                </div>
              </div>
              <div class="dropdown">
                <div class="btn-group">
                  <button type="button" class="btn btn-lg btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Category
                  </button>
                  <ul class="dropdown-menu dropdown-content" role="menu" aria-labelledby="dropdownMenu">
                    <li><a class="dropdown-item" tabindex="-1" href="#">Arts (Film, Music)</a></li>
                    <li><a class="dropdown-item" tabindex="-1" href="#">Carnivals</a></li>
                    <li><a class="dropdown-item" tabindex="-1" href="#">Changing Seasons</a></li>
                    <li><a class="dropdown-item" tabindex="-1" href="#">Food and Agriculture</a></li>
                    <li><a class="dropdown-item" tabindex="-1" href="#">Religious</a></li>
                  </ul>
                </div>
              </div>
              <div class="dropdown">
                <input class="form-control btn-lg btn border border-warning" type="text" name="daterange" value="01/01/2018 - 01/15/2018" />
              </div>
            </div>


            <script>
              var today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
              $(function() {
                $('input[name="daterange"]').daterangepicker({
                  opens: 'left',
                  minDate: today
                }, function(start, end, label) {
                  console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
                });
              });
            </script>

          </div>
        </div>

        <div class="row">

          <?php

          if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                ?>

                <div class="col-md-4 col-sm-6 portfolio-item">
                  <a class="portfolio-link" data-toggle="modal" href="#portfolioModal<?php echo $row["id"] ?>">
                    <div class="portfolio-hover">
                      <div class="portfolio-hover-content">
                        <i class="fa fa-plus fa-3x"></i>
                      </div>
                    </div>
                    <img class="img-fluid" src="<?php echo $row["image"] ?>" alt="">
                  </a>
                  <div class="portfolio-caption">
                    <h4><?php echo $row["title"] ?></h4>
                    <p class="text-muted"><?php echo $row["date_festival_from"] ?> to <?php echo $row["date_festival_to"] ?></p>
                    <p class="text-muted"><?php echo $row["description"] ?></p>
                  </div>
                </div>

                <div class="portfolio-modal modal fade" id="portfolioModal<?php echo $row["id"] ?>" tabindex="-1" role="dialog" aria-hidden="true" style="z-index:9000000;background-color:white;">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                          <div class="rl"></div>
                        </div>
                      </div>
                      <div class="container">
                        <div class="row">
                          <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                              <h2 class="text-uppercase"><?php echo $row["title"] ?></h2>
                              <img class="img-fluid d-block mx-auto" src="<?php echo $row["image"] ?>" alt="">
                              <p><?php echo $row["description"] ?></p>
                              <ul class="list-inline">
                                <li>Date: <?php echo $row["date_festival_from"] ?> to <?php echo $row["date_festival_to"] ?></li>
                                <li>City: <?php echo $row["city"] ?></li>
                                <li>Country: <?php echo $row["country"] ?></li>
                              </ul>
                              <button class="btn btn-primary" data-dismiss="modal" type="button">
                                <i class="fa fa-times"></i>
                                Close Project</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


                <?php
              }
          }
          // else {
          //     echo "0 results";
          // }
          $conn->close();
          ?>

        </div>
      </div>
    </section>

    <!-- Upcoming -->
    <section id="upcoming">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Upcoming</h2>
            <h3 class="section-subheading text-muted">Check out the most popular festivals that are starting soon.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/1.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>28th April 2018</h4>
                    <p class="text-muted">Chiang Mai, Thailand</p>
                  </div>
                  <div class="timeline-body">
                    <h5>Latern Festival</h5>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/2.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>28th April 2018</h4>
                    <p class="text-muted">Chiang Mai, Thailand</p>
                  </div>
                  <div class="timeline-body">
                    <h5>Latern Festival</h5>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/3.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>28th April 2018</h4>
                    <p class="text-muted">Chiang Mai, Thailand</p>
                  </div>
                  <div class="timeline-body">
                    <h5>Latern Festival</h5>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/4.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>28th April 2018</h4>
                    <p class="text-muted">Chiang Mai, Thailand</p>
                  </div>
                  <div class="timeline-body">
                    <h5>Latern Festival</h5>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <a class="timeline-image text-uppercase js-scroll-trigger see-more-btn" href="#portfolio">
                  <h4>See
                    <br>More
                    <br>Festivals!</h4>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Contact Me</h2>
            <h3 class="section-subheading text-muted">Let me know what comes to your mind! I will do my best to answer you as soon as possible.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Your Name *" required data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="topic" placeholder="Subject *" required data-validation-required-message="Please enter a subject.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit" name="sendMessageButton">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; Ruta 2018</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <div class="portfolio-modal modal fade" id="addNewModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <h2 class="text-uppercase">Add New Festival</h2>
                  <br>
                  <form id="festivalForm" name="sentFestival" novalidate>
                    <div class="form-group row">
                      <label for="fesName" class="col-3 col-form-label">Festival Name</label>
                      <div class="col-9">
                        <input type="text" class="form-control" id="fesName" placeholder="Enter festival name">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="fesCountry" class="col-3 col-form-label">Country</label>
                      <div class="col-9">
                        <input type="text" class="form-control" id="fesCountry" placeholder="Enter country">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="fesCity" class="col-3 col-form-label">City</label>
                      <div class="col-9">
                        <input type="text" class="form-control" id="fesCity" placeholder="Enter city">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="fesStartDate" class="col-3 col-form-label">Start Date (mm/dd/yyy)</label>
                      <div class="col-9">
                        <input class="form-control" type="date" value="2018-08-19" id="fesStartDate">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="fesEndDate" class="col-3 col-form-label">Finish Date (mm/dd/yyy)</label>
                      <div class="col-9">
                        <input class="form-control" type="date" value="2018-08-19" id="fesEndDate">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="fesDescr" class="col-4 col-form-label">Description/experience or any comments about the festival?</label>
                      <div class="col-8">
                        <textarea class="form-control" id="fesDescr" rows="3"></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="fesFile" class="col-4 col-form-label">Any photos you took during the festival and want to share?</label>
                      <div class="col-8">
                        <br>
                        <input type="file" class="form-control-file" id="fesFile">
                      </div>
                    </div>
                    <br>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                        I would like to post the information on the www.whereisfestival.com website. Other users or admin will be able to edit the information.
                      </label>
                    </div>
                    <br>
                    <div id="submitted"></div>
                    <button id="sendFestivalButton" class="btn btn-success text-uppercase" type="submit" name="sendFestivalButton">Send</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <script src="js/festival_send.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.js"></script>

    <!-- Date Range Picker -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />


  </body>

</html>
