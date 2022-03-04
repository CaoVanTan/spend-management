
$(document).ready(function() {
    // Model add
    $(".js-btn").click(function() {
      $(".modal-wrap").show();
    });
  });

  $(document).ready(function() {
    // Model add
    $(".modal-list-category").click(function() {
      $(".overlay__detail").show();
    });
  });

  $(".js-modal-close").click(function() {
      $(".modal-wrap").hide();
  });
  $(".js-detail-close").click(function() {
      $(".overlay__detail").hide();

  });


