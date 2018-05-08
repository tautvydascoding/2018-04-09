$(function () {
  $('[data-toggle="tooltip"]').tooltip();

  $(".gallery-card-cancel-button").click(function() {
    var parent = $(this).parent(".gallery-card");
    $.post("gallery_image_delete.php", {
        id: parent[0].dataset.id
      },
      function(data, status) {
        parent.slideUp(1000,
          function(){
            parent.remove(".gallery-card");
          }
        );
      });
  });
})
