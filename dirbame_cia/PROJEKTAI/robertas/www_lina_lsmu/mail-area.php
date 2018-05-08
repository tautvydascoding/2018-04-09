<?php
  require_once("libs/db-connect.php");
  require_once("libs/db-lib.php");
?>

<!DOCTYPE html>
<html class="mail-area" lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="libs/normalize/css/normalize.css">
    <link rel="stylesheet" href="libs/mdl/css/material.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="css/styles.min.css" />

    <title>Mail area</title>
  </head>
  <body>
    <div class="mail-area-layout-waterfall mdl-layout mdl-js-layout">
      <header class="mdl-layout__header mdl-layout__header--waterfall">
        <!-- Top row, always visible -->
        <div class="mdl-layout__header-row">
          <!-- Title -->
          <span class="mdl-layout-title">Mail area</span>
          <div class="mdl-layout-spacer"></div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                      mdl-textfield--floating-label mdl-textfield--align-right">
            <label class="mdl-button mdl-js-button mdl-button--icon"
                   for="waterfall-exp">
              <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
              <input class="mdl-textfield__input" type="text" name="sample"
                     id="waterfall-exp">
            </div>
          </div>
        </div>
        <!-- Bottom row, not visible on scroll -->
        <div class="mdl-layout__header-row">
          <div class="mdl-layout-spacer"></div>
          <!-- Navigation -->
          <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="#">About us</a>
            <a class="mdl-navigation__link" href="#">Team</a>
            <a class="mdl-navigation__link" href="#">Projects</a>
            <a class="mdl-navigation__link" href="#">Publications</a>
          </nav>
        </div>
      </header>
      <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">Mail area</span>
        <nav class="mdl-navigation">
          <a class="mdl-navigation__link" href="#">About us</a>
          <a class="mdl-navigation__link" href="#">Team</a>
          <a class="mdl-navigation__link" href="#">Projects</a>
          <a class="mdl-navigation__link" href="#">Publications</a>
        </nav>
      </div>
      <main class="mdl-layout__content">
        <div class="page-content mdl-grid">

          <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
            <form novalidate id="form-mail-area-subscribe" name="form-mail-area-subscribe"
            action="#" method="post" class="form-mail-area-subscribe">

                <?php
                  $allChannels = getAllRowsOfTable(TABLE_CHANNELS);
                  $channelCount = count($allChannels);
                  for($i = 0; $i < $channelCount; $i++):
                ?>

                  <div class="<?= $i == $channelCount - 1 ? 'margin-bottom-1_5rem' : 'margin-bottom-1rem' ?>">
                    <label for="checkbox-<?=$i?>" class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                      <input id="checkbox-<?=$i?>" type="checkbox" data-channels-id="<?= $allChannels[$i][COLUMN_CHANNELS_ID] ?>"
                      class="form-mail-area-subscribe-checkbox mdl-checkbox__input">
                      <span class="mdl-checkbox__label"><?= $allChannels[$i][COLUMN_CHANNELS_NAME] ?></span>
                    </label>
                  </div>

                <?php endfor; ?>

                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <label id="label-email-mail-area-subscribe" for="input-email-mail-area-subscribe" class="mdl-textfield__label">
                    Email:
                  </label>
                  <input id="input-email-mail-area-subscribe" name="email" type="email"
                  class="mdl-textfield__input form-mail-area-subscribe-input">
                </div>

                <button id="button-submit-mail-area-subscribe" name="submit" type="submit"
                class="display-block mdl-button mdl-js-button mdl-button--raised">
                  Subscribe
                </button>

                <label class="form-mail-area-subscribe-label-success">Subscription update successful!</label>
                <label class="form-mail-area-subscribe-label-error"></label>

            </form>
          </div>

        </div>
      </main>
      <footer class="mdl-mini-footer">
        <div class="mdl-mini-footer__left-section">
          <div class="mdl-logo">
            More Information
          </div>
          <ul class="mdl-mini-footer__link-list">
            <li><a href="#">Help</a></li>
            <li><a href="#">Privacy and Terms</a></li>
            <li><a href="#">User Agreement</a></li>
          </ul>
        </div>
        <div class="mdl-mini-footer__right-section">
          <button class="mdl-mini-footer--social-btn social-btn social-btn__twitter">
            <span class="visuallyhidden">Twitter</span>
          </button>
          <button class="mdl-mini-footer--social-btn social-btn social-btn__facebook">
            <span class="visuallyhidden">Facebook</span>
          </button>
          <button class="mdl-mini-footer--social-btn social-btn social-btn__gplus">
            <span class="visuallyhidden">Google Plus</span>
          </button>
        </div>
      </footer>
    </div>

    <script src="libs/mdl/js/material.min.js"></script>
    <script src="libs/jquery/js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="libs/validate/js/validate.js"></script>

    <script>
    $(".form-mail-area-subscribe-input").focus(
      function(){
        $(this).removeClass('invalid-input');
      }
    );
    </script>

    <script>
    var formSubmitted = false; // Used to prevent duplicate form submission.

    const FADE_IN_TIME = 200;
    var validator = new FormValidator(
      'form-mail-area-subscribe', [{
        name: 'email',
        display: 'Email',
        rules: 'required|valid_email|max_length[255]'

        // TODO: Check if at least 1 channel to sub to is selected.
      }],

      function(errors, evt) {
        const SELECTOR_ERRORS = $('.form-mail-area-subscribe-label-error'),
        SELECTOR_SUCCESS = $('.form-mail-area-subscribe-label-success');

        if (errors.length > 0) {
          SELECTOR_ERRORS.empty();

          for (var i = 0, errorLength = errors.length; i < errorLength; i++) {
            SELECTOR_ERRORS.append(errors[i].message + '<br />');
            $(errors[i].element).addClass('invalid-input');
          }

          SELECTOR_SUCCESS.css({
            display: 'none'
          });
          SELECTOR_ERRORS.fadeIn(FADE_IN_TIME);
        } else {
          // --- Send registration data ---
          if(!formSubmitted){
            formSubmitted = true;

            var channelIds = [];
            var checkboxArray = $(".form-mail-area-subscribe-checkbox");

            var i;
            for (i = 0; i < checkboxArray.length; i++) {
              var id = checkboxArray.eq(i).data("channelsId");
              channelIds.push(id);
            }

            $.post("subscribe-to-channel.php", {
                email: $("input#input-email-mail-area-subscribe").val(),
                channels: channelIds
              },
              function(error, status) {
                if(error !== ""){
                  formSubmitted = false;

                  SELECTOR_ERRORS.empty();

                  switch (error) {
                    case "email-not-registered":
                      SELECTOR_ERRORS.append("Email not found in database!<br>");
                      $("input#input-email-mail-area-subscribe").addClass('invalid-input');
                      break;
                    default:
                      SELECTOR_ERRORS.append("Something went very VERY wrong.<br>");
                  }
                }else{
                  SELECTOR_ERRORS.css({ display: 'none' });
                  SELECTOR_SUCCESS.fadeIn(FADE_IN_TIME);
                  $("input#input-email-mail-area-subscribe").addClass('valid-input');
                  $("button#button-submit-mail-area-subscribe")[0].disabled = true;
                }
              }
            );
          }
          // --- end send registration data ---
        }

        // Prevent "normal" HTML form submission:
        if (evt && evt.preventDefault) {
          evt.preventDefault();
        } else if (event) {
          event.returnValue = false;
        }
      });
    </script>
  </body>
</html>
