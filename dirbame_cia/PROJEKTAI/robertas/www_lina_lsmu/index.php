<!DOCTYPE html>
<html class="index" lang="en" dir="ltr">

<head>
  <?php require_once("header_tags.php"); ?>
  <title>Index</title>
</head>

<body>
  <div class="container-fluid h-100">
    <div id="wrapper" class="row h-100 position-relative">
      <div class="col-md-2"></div>
      <!-- end col SiderBarFix -->
      <div id="sidebar" class="col-md-2 index-sidebar d-md-flex flex-md-column justify-content-md-between">
        <div id="logo-and-nav-wrapper" class="row">
          <div id="logo-and-nav" class="col-md">
            <div id="logo-wrapper" class="row">
              <div id="logo" class="col-md text-center">
                <img class="logo" src="img/logo.png" alt="lsmu logo image">
              </div>
              <!-- end col logo -->
            </div>
            <!-- end row logo-wrapper -->
            <div id="nav-wrapper" class="row">
              <nav class="col-md p-0">
                <ul class="nav flex-column">
                  <li class="nav-item index-sidebar-button">
                    <a class="nav-link active" href="#">Home</a>
                  </li>
                  <li class="nav-item index-sidebar-button">
                    <a class="nav-link" href="#">About us</a>
                  </li>
                  <li class="nav-item index-sidebar-button">
                    <a class="nav-link" href="#">Projects</a>
                  </li>
                  <li class="nav-item index-sidebar-button">
                    <a class="nav-link" href="#">Team</a>
                  </li>
                  <li class="nav-item index-sidebar-button">
                    <a class="nav-link" href="#">Publications</a>
                  </li>
                </ul>
              </nav>
            </div>
            <!-- end row nav-wrapper -->
          </div>
          <!-- end col logo-and-nav -->
        </div>
        <!-- end row logo-and-nav-wrapper -->
        <div id="footer-wrapper" class="row mb-2">
          <footer class="col-md p-0 text-right">© 2018</footer>
        </div>
        <!-- end row footer-wrapper -->
      </div>
      <!-- end col sidebar-->
      <div id="content-wrapper" class="col-md mx-md-3">
        <div id="myCarousel" class="row carousel slide mb-md-3" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" style="background-image: url(img/gallery/1.jpg);">
              <img class="carousel-image" src="img/gallery/1.jpg" />
            </div>
            <div class="carousel-item" style="background-image: url(img/gallery/2.jpg);">
              <img class="carousel-image" src="img/gallery/2.jpg" />
            </div>
            <div class="carousel-item" style="background-image: url(img/gallery/3.jpg);">
              <img class="carousel-image" src="img/gallery/3.jpg" />
            </div>
          </div>
          <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <!-- end row carousel -->
        <div id="content" class="row">
          <main class="col-md mr-md-3 mb-md-3 section">
            <article class="">
              <h2>Main content</h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </article>
          </main>
          <div id="side-content" class="col-md-4">
            <div id="partners-wrapper" class="row">
              <div id="partners" class="col-md mb-md-3 section">
                <article class="">
                  <h2>Partners</h2>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                    in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </p>
                </article>
              </div>
              <!-- end col partners -->
            </div>
            <!-- end row partners-wrapper -->
            <div id="gallery-wrapper" class="row">
              <div id="gallery" class="col-md mb-md-3 section">
                <article class="">
                  <h2>Gallery</h2>
                  <div class="image-container d-flex flex-wrap justify-content-around">
                    <div class="thumbnail m-2">
                      <a href="img/gallery/1.jpg">
                        <img src="img/gallery_thumbnails/1.jpg" alt="1" style="width:7rem">
                      </a>
                    </div>
                    <div class="thumbnail m-2">
                      <a href="img/gallery/2.jpg">
                        <img src="img/gallery_thumbnails/2.jpg" alt="2" style="width:7rem">
                      </a>
                    </div>
                    <div class="thumbnail m-2">
                      <a href="img/gallery/3.jpg">
                        <img src="img/gallery_thumbnails/3.jpg" alt="3" style="width:7rem">
                      </a>
                    </div>
                    <div class="thumbnail m-2">
                      <a href="img/gallery/4.jpg">
                        <img src="img/gallery_thumbnails/4.jpg" alt="4" style="width:7rem">
                      </a>
                    </div>
                    <div class="thumbnail m-2">
                      <a href="img/gallery/5.jpg">
                        <img src="img/gallery_thumbnails/5.jpg" alt="5" style="width:7rem">
                      </a>
                    </div>
                    <div class="thumbnail m-2">
                      <a href="img/gallery/6.jpg">
                        <img src="img/gallery_thumbnails/6.jpg" alt="6" style="width:7rem">
                      </a>
                    </div>
                  </div>
                </article>
              </div>
              <!-- end col gallery -->
            </div>
            <!-- end row gallery-wrapper -->
          </div>
          <!-- end col side-content -->
        </div>
        <!-- end row content-->
      </div>
      <!-- end col content-wrapper -->
    </div>
    <!-- end row wrapper -->
  </div>
  <!-- end container -->

  <script src="libs/jquery/js/jquery-3.3.1.js"></script>
  <script src="libs/popper/js/popper.js"></script>
  <script src="libs/bootstrap4/js/bootstrap.js"></script>

</body>

</html>
