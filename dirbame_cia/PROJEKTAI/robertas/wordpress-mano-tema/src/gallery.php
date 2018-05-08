<!DOCTYPE html>
<html class="gallery" lang="en" dir="ltr">

<head>
  <?php require_once("header_tags.php"); ?>
  <title>Gallery</title>
</head>

<body>
  <?php
    require_once("libs/images_db_lib.php");
  ?>

  <!-- Bg-video commented out for faster dev load time -->
  <!-- <video autoplay muted loop class="gallery-video-background position-fixed">
    <source src="vid/jellyfish-25-mbps-hd-hevc.mp4" type="video/mp4">
  </video> -->

  <form action="send_email.php" method="post">
    <input type="submit" name="send-button" value="Send Email!">
  </form>

  <div class="gallery-content mx-auto">
    <?php
      $images = getAllImages();
      foreach ($images as $img) {
        print(
          '<div data-id="'.$img["id"].'" class="card gallery-card position-relative">
            <img class="gallery-card-cancel-button" src="img/icons/cancel_button.svg" alt="Card cancel button">
            <img class="card-img-top" src="img/gallery/'.$img["filename"].'" alt="Card image top">
            <div class="card-body gallery-card-body">
              <h2>'.$img["title"].'</h2>
              <p class="card-text">'.$img["description"].'</p>
            </div>
          </div>'
        );
      }
    ?>

    <header class="gallery-header container">
      <div class="row h-100 align-items-end">

        <?php
          $nav_buttons = [
            "Gallery",
            "About",
            "Team",
            "Projects"
          ];

          for($i = 0; $i < count($nav_buttons); $i++){
            echo '<div class="h-100 col-3 d-flex align-items-end justify-content-center gallery-nav-button">'
              .$nav_buttons[$i].
            '</div>';
          }
        ?>

      </div>
    </header>
  </div>

  <script src="libs/jquery/js/jquery-3.3.1.js"></script>
  <script src="libs/popper/js/popper.js"></script>
  <script src="libs/bootstrap4/js/bootstrap.js"></script>
  <script src="js/main.js"></script>
</body>

</html>
