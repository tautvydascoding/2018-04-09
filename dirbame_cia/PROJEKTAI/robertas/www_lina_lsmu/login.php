<!DOCTYPE html>
<html class="login" lang="en" dir="ltr">
  <head>
    <?php require_once("header_tags.php"); ?>
    <title>Login</title>
  </head>
  <body>
    <form novalidate id="login-form" name="login-form" class="login-form">
      <fieldset id="login-form-fieldset">
        <label for="uname">Username:</label>
        <input id="uname" type="text" name="uname" class="login-form-input">

        <label for="password">Password:</label>
        <input id="password" type="password" name="password" class="login-form-input">

        <input id="submit" type="submit" name="submit" value="Login" class="login-form-input">
      </fieldset>

      <label class="login-form-label-success">User logged in successfully.</label>
      <label class="login-form-label-error"></label>
    </form>

    <script src="libs/jquery/js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="libs/validate/js/validate.js"></script>

    <script>
    $(".login-form-input").focus(
      function(){
        $(this).removeClass('invalid-input');
      }
    );
    </script>

    <script>
    var formSubmitted = false; // Used to prevent duplicate form submission.

    const FADE_IN_TIME = 200;
    var validator = new FormValidator(
      'login-form', [{
        name: 'uname',
        display: 'Username',
        rules: 'required|min_length[6]|max_length[100]|alpha_dash'
        // TODO: Check if username is already in DB with AJAX.
      }, {
        name: 'password',
        display: 'Password',
        rules: 'required|min_length[8]|max_length[100]'
        // TODO: Define AND check against custom password rules (allowed symbols).
      }],
      function(errors, evt) {
        const SELECTOR_ERRORS = $('.login-form-label-error'),
        SELECTOR_SUCCESS = $('.login-form-label-success');

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

            $.post("validate-login.php", {
                uname: $("input#uname").val(),
                password: $("input#password").val()
              },
              function(error, status) {
                if(error !== ""){
                  formSubmitted = false;

                  SELECTOR_ERRORS.empty();

                  switch (error) {
                    case "uname":
                      SELECTOR_ERRORS.append("Username not found in database!<br>");
                      $("input#uname").addClass('invalid-input');
                      break;
                    case "password":
                      SELECTOR_ERRORS.append("Wrong password!<br>");
                      $("input#password").addClass('invalid-input');
                      break;
                    default:
                      SELECTOR_ERRORS.append("Something went very VERY wrong.<br>");
                  }
                }else{
                  SELECTOR_ERRORS.css({ display: 'none' });
                  SELECTOR_SUCCESS.fadeIn(FADE_IN_TIME);
                  $("input#uname").addClass('valid-input');
                  $("input#password").addClass('valid-input');

                  $("input#submit")[0].disabled = true;
                  $("fieldset#login-form-fieldset").slideUp("slow", function(){
                    window.location.replace("gallery.php");
                  });
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
