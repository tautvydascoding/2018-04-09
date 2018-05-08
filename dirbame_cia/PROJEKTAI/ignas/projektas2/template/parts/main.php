<!-- MAIN - STARTS -->


      <main class="bg-light">

<!-- SVEIKI (ABOUT US) - STARTS -->


        <div class="row sveiki p-2 justify-content-center " id="sveiki">

          <div class="col-md-5 text-justify">
            <h2 class="pb-3">Sveiki!</h2>
            <p>Mes esam lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. <br> Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <div class="col-md-4 d-flex justify-content-center align-items-center mt-5">
            <a href="#"><i class="fas fa-female fa-10x fablack"></i></a>
            <a href="#"><i class="fas fa-male fa-10x fablack"></i></a>                 
          </div>
        </div>

<!-- SVEIKI (ABOUT US) - ENDS -->
      
<!-- VEIKSMAS (GALLERY) - STARTS -->


        <div class="row veiksmas bg-light mx-0 px-0" id="veiksmas">

          <div class="col-md-3 col-sm-6 p-0">
            <div class="row aukstis-200 divpic">
              <img class="rounded pic" src="../assets/images/gallery1.PNG" alt="">
            </div>
            <div class="row aukstis-300 divpic">
              <img class="rounded pic" src="../assets/images/gallery2.PNG" alt="">
            </div>
          </div>
          <div class="col-md-5 col-sm-6 p-0">
            <div class="row aukstis-250 divpic">
              <div class="col-md-6 d-none d-md-block">
                <div class="row aukstis-150 divpic">
                  <img class="rounded pic" src="../assets/images/gallery3.PNG" alt="">
                </div>
                <div class="row aukstis-100 divpic">
                  <img class="rounded pic" src="../assets/images/gallery4.PNG" alt="">
                </div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="row divpic">
                  <img class="rounded pic" src="../assets/images/gallery5.PNG" alt="">
                </div>
              </div>
            </div>
            <div class="row aukstis-250 divpic">
              <div class="col-md-7 col-sm-6">
                <div class="row divpic">
                  <img class="rounded pic" src="../assets/images/gallery1.PNG" alt="">
                </div>
              </div>
              <div class="col-md-5 col-sm-6">
                <div class="row divpic">
                  <img class="rounded pic" src="../assets/images/gallery2.PNG" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 p-0">
            <div class="row aukstis-300 divpic">
              <div class="col-md-6">
                <div class="row divpic">
                  <img class="rounded pic" src="../assets/images/gallery3.PNG" alt="">
                </div>
              </div>
              <div class="col-md-6 col-sm-12">
                <div class="row divpic">
                  <img class="rounded pic" src="../assets/images/gallery4.PNG" alt="">
                </div>
              </div>
            </div>
            <div class="row aukstis-200 divpic">             
              <img class="rounded pic" src="../assets/images/gallery1.PNG" alt="">
            </div>
          </div>

        </div>

<!-- VEIKSMAS (GALLERY) ENDS -->

<!-- PASLAUGOS STARTS -->

      <?php 
        $paslaugos1 = getPaslaugos(1);
        $paslaugos2 = getPaslaugos(2);
        $paslaugos3 = getPaslaugos(3);
      ?>
        <div id="paslaugos" class="fa-7x d-flex text-center my-5 aukstis-300">
          <div class="paslaugos d-flex align-items-center">
            <i class="fas fa-sun paslaugosFoto"></i>
            <div class="overlay">
              <div class="text text-justify">
                <h4><?php echo $paslaugos1['title']; ?></h4>
                <p><?php echo $paslaugos1['description'] .' - '. $paslaugos1['price'] .' &euro;'; ?></p>
              </div>
            </div>
          </div>
          <div class="paslaugos d-flex align-items-center">
            <i class="fas fa-moon paslaugosFoto"></i>
            <div class="overlay">
              <div class="text text-justify">
                <h4><?php echo $paslaugos2['title']; ?></h4>
                <p><?php echo $paslaugos2['description'] .' - '. $paslaugos2['price'] .' &euro;'; ?></p>
              </div>
            </div>
          </div>
          <div class="paslaugos d-flex align-items-center">
            <i class="fas fa-calendar-alt paslaugosFoto"></i>
            <div class="overlay">
              <div class="text text-justify">
                <h4><?php echo $paslaugos3['title']; ?></h4>
                <p><?php echo $paslaugos3['description'] .' '. $paslaugos3['price'] .' - &euro;'; ?></p>
              </div> 
            </div>
          </div>
        </div>

<!-- PASLAUGOS ENDS -->

      </main>

<!-- MAIN ENDS -->
