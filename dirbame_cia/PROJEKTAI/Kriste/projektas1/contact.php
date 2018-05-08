
<?php
include('header.php');
 ?>


<!-- start 2 container -->
<div class="container-fluid aukstis-626 pagrindinis-tekstas">

    <!-- start pagrindine row -->
    <div class="row">

      <!-- start 1 column -->
      <div class="col-md-4 main">
        <!-- start 1 row-->
        <div class="row d-flex justify-content-center aukstis-100">
          <div class="col-md main">
            <h4> <br>CONTACT US </h4>
          </div>
        <!-- end 1 row -->
        </div>

        <!-- start 2 row -->
        <div class="row d-flex justify-content-center aukstis-30">
          <div class="col-md main">
            <p>
              __________
            </p>
          </div>
        <!-- end 2 row -->
        </div>

        <!-- start 3 row -->
        <div class="row d-flex justify-content-center aukstis-466">
          <div class="col-md main">
            <article class="">
              <p class="el-pastas">
                <br>
                <i class="fa fa-envelope-o"> zylesdebesy@gmail.com </i> <br>
                <i class="fa fa-mobile"> +370 610 26699 </i>
                <br><br><br>
              </p>
            </article>
            <article>
              <h5>QUICK MESSAGE</h5>
                <form class="d-flex justify-content-center" action="quick-message.php" name="myFormQM" onsubmit="return validateFormQM();" method="post">
                  <div class="form-group">
                    <input type="text" name="vardas" value="" class="form-control" required placeholder="Your name"> <br>
                    <input type="text" name="pastas" value="" class="form-control" aria-describedby="emailHelp" placeholder="Your email" required> <br>
                    <textarea class="form-control" rows="5" cols="50" name="klausimas" required placeholder="Your message here..."></textarea>
                    <br>
                    <button type="submit" name="mygtukas" class="btn btn-outline-secondary siuntimo-mygtukas">Send message!</button>
                  </div>
                </form>
            </article>
          </div>
        <!-- end 3 row -->
        </div>

        <!-- start 4 row -->
        <div class="row d-flex justify-content-center aukstis-30">
          <div class="col-md main">
            <p>
              __________
            </p>
          </div>
        <!-- end 4 row -->
        </div>

      </div>
      <!-- end 1 column -->


      <!-- start 2 column -->
      <div class="col-md-3 main">
        <!-- start 1 row-->
        <div class="row d-flex justify-content-center aukstis-100">
          <div class="col-md main">
            <h4> <br>GET SOCIAL  </h4>
          </div>
        <!-- end 1 row -->
        </div>

        <!-- start 2 row -->
        <div class="row d-flex justify-content-center aukstis-30">
          <div class="col-md main">
            <p>
              __________
            </p>
          </div>
        <!-- end 2 row -->
        </div>

        <!-- start 3 row -->
        <div class="row d-flex justify-content-center aukstis-466">
          <div class="col-md main">
            <article>
              <p class="getSocial">
              <br>
              Stay updated with the latest styles, collections and trends on our Social profiles and Newsletter.
              <br><br>
              <a href="https://www.facebook.com/profile.php?id=100016758968877" target="_blank" class="fa fa-facebook-square"> </a>
              <i class="fa fa-instagram">  </i>
              <i class="fa fa-pinterest">  </i>
              </p>
            </article>
            <article class="naujienos">
              <br><br>
              <h5>NEWSLETTER</h5>
              <p> Sign up for our Newsletter:</p>  <br>
              <form class="d-flex justify-content-center" action="newsletter.php" name="myForm" onsubmit="return validateForm();" method="get">
                <input type="text" name="elPastas" value="" class="form-control" aria-describedby="emailHelp" placeholder="Your email" required> <br>
                <button type="submit" name="button" value="submit" class="btn btn-outline-secondary naujienlaisko-forma">Sign up!</button>
              </form>
            </article>
          </div>
        <!-- end 3 row -->
        </div>

        <!-- start 4 row -->
        <div class="row d-flex justify-content-center aukstis-30">
          <div class="col-md main">
            <p>
              __________
            </p>
          </div>
        <!-- end 4 row -->
        </div>

      </div>
      <!-- end 2 column -->


      <!-- start 3 column -->
      <div class="col-md main">
        <!-- start 1 row-->
        <div class="row d-flex justify-content-center aukstis-100">
          <div class="col-md main">
            <h4> <br>FIND US  </h4>
          </div>
        <!-- end 1 row -->
        </div>

        <!-- start 2 row -->
        <div class="row d-flex justify-content-center aukstis-30">
          <div class="col-md main">
            <p>
              __________
            </p>
          </div>
        <!-- end 2 row -->
        </div>

        <!-- start 3 row -->
        <div class="row d-flex justify-content-center aukstis-466">
          <div class="col-md main zemelapis">
            <article>
              <p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2296.4210060888227!2d23.905552651440505!3d54.860418180227576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46e72255af1d9ae3%3A0xc05027ddceadecef!2sS.+%C4%8Ciurlionien%C4%97s-Kymantait%C4%97s+g.+6%2C+Kaunas+46321!5e0!3m2!1sen!2slt!4v1525272992761" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
              </p>
            </article>
          </div>
        <!-- end 3 row -->
        </div>

        <!-- start 4 row -->
        <div class="row d-flex justify-content-center aukstis-30">
          <div class="col-md main">
            <p>
              __________
            </p>
          </div>
        <!-- end 4 row -->
        </div>

      </div>
      <!-- end 3 column -->

    </div>
    <!-- end pagrindine row -->

  </div>
  <!-- end 2 container -->



      <?php
      include('footer.php');
       ?>
