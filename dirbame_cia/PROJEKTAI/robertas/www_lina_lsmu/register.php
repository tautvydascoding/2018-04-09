<!DOCTYPE html>
<html class="register" lang="en" dir="ltr">

<head>
  <?php require_once("header_tags.php"); ?>
  <title>Register</title>
</head>

<body>
  <form novalidate id="register_form" name="register_form" class="register_form">
    <fieldset id="register-form-fieldset">
      <label for="fname" class="register-form-input-label">First name:</label>
      <input id="fname-input" type="text" name="fname" class="register-form-input">

      <label for="lname" class="register-form-input-label">Last name:</label>
      <input id="lname-input" type="text" name="lname" class="register-form-input">

      <label for="uname" class="register-form-input-label">Username:</label>
      <input id="uname-input" type="text" name="uname" class="register-form-input">

      <label for="email" class="register-form-input-label">Email:</label>
      <input id="email-input" type="email" name="email" class="register-form-input">

      <label for="password" class="register-form-input-label">Password:</label>
      <input id="password-input" type="password" name="password" class="register-form-input">

      <input id="submit-button-input" type="submit" name="submit-button" value="Register" class="register-form-input">
    </fieldset>

    <label class="success_box">User registered successfully. Welcome aboard!</label>
    <label class="error_box"></label>
  </form>

  <script src="libs/jquery/js/jquery-3.3.1.js"></script>
  <script type="text/javascript" src="libs/validate/js/validate.js"></script>

  <script>
  $(".register-form-input").focus(
    function(){
      $(this).removeClass('invalid-input');
    }
  );
  </script>

  <script>
  var formSubmitted = false; // Used to prevent duplicate form submission.

  const FADE_IN_TIME = 200;
  var validator = new FormValidator(
    'register_form', [{
      name: 'fname',
      display: 'First name',
      rules: 'required|min_length[2]|max_length[100]|alpha'
    }, {
      name: 'lname',
      display: 'Last name',
      rules: 'required|min_length[2]|max_length[100]|alpha'
    }, {
      name: 'uname',
      display: 'Username',
      rules: 'required|min_length[6]|max_length[100]|alpha_dash'
      // TODO: Check if username is already in DB with AJAX.
    }, {
      name: 'email',
      display: 'Email',
      rules: 'required|valid_email|max_length[255]'
      // TODO: Check if email is already in DB.
    }, {
      name: 'password',
      display: 'Password',
      rules: 'required|min_length[8]|max_length[100]'
      // TODO: Define AND check against custom password rules (allowed symbols).
    }],
    function(errors, evt) {
      const SELECTOR_ERRORS = $('.error_box'),
      SELECTOR_SUCCESS = $('.success_box');

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
        SELECTOR_ERRORS.css({
          display: 'none'
        });
        SELECTOR_SUCCESS.fadeIn(FADE_IN_TIME);

        // --- Send registration data ---
        if(!formSubmitted){
          formSubmitted = true;
          $.post("libs/register_db.php", {
              fname: $("#fname-input").val(),
              lname: $("#lname-input").val(),
              uname: $("#uname-input").val(),
              email: $("#email-input").val(),
              password: $("#password-input").val()
            },
            function(data, status) {
              $("input#submit-button-input")[0].disabled = true;
              $("input#submit-button-input").slideUp("fast", function(){
                $("fieldset#register-form-fieldset").slideUp();
              });
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
