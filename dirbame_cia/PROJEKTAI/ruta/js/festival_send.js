$(function festivalForm() {

  $("input,textarea").jqBootstrapValidation({
    preventSubmit: true,
    submitError: function($form, event, errors) {
      // additional error messages or events
    },
    submitSuccess: function($form, event) {
      event.preventDefault(); // prevent default submit behaviour
      // get values from FORM
      var fesName = $("input#fesName").val();
      var fesCountry = $("input#fesCountry").val();
      var fesCity = $("input#fesCity").val();
      var fesDescr = $("textarea#fesDescr").val();
      $.ajax({
        url: "mail/festival_send.php",
        type: "POST",
        data: {
          fesName: fesName,
          fesCountry: fesCountry,
          fesCity: fesCity,
          fesDescr: fesDescr
        },
        cache: false,
        success: function() {
          // Success message
          $('#submitted').html("<div class='alert alert-success'>");
          $('#submitted > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
            .append("</button>");
          $('#submitted > .alert-success')
            .append("<strong>Your message has been sent. </strong>");
          $('#submitted > .alert-success')
            .append('</div>');
          //clear all fields
          $('#festivalForm').trigger("reset");
        },
        error: function() {
          // Fail message
          $('#submitted').html("<div class='alert alert-danger'>");
          $('#submitted > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
            .append("</button>");
          $('#submitted > .alert-danger').append($("<strong>").text("Sorry, it seems that my mail server is not responding. Please try again later!"));
          $('#submitted > .alert-danger').append('</div>');
          //clear all fields
          $('#festivalForm').trigger("reset");
        },
    });
    console.log(fesname);
},
filter: function() {
    return $(this).is(":visible");
},
});

$("a[data-toggle=\"tab\"]").click(function(e) {
e.preventDefault();
$(this).tab("show");
});
});

/*When clicking on Full hide fail/success boxes */
$('#name').focus(function() {
  $('#submitted').html('');
});
