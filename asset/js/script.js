$(document).ready(function () {
  $(".jsthistmonth").click(function () {
    $(".thisMonth").show();
    $(".jsmain").hide();
  });

  $(".jslastmonth1").click(function () {
    $(".thisMonth").hide();
    $(".jsmain").show();
  });

  $(".jslastmonth2").click(function () {
    $(".thisMonth").hide();
    $(".jsmain").show();
  });

  $(".list-transaction").click(function () {
    var spend_id = $(this).attr("id");
    $(".transaction-id").text(spend_id);
    $(".js_detail").show();
    $(".jscontent-main").css({ marginRight: "690px" });
  });

  $(".jsbtnedittran").click(function () {
    $(".Edit-transaction").show();
  });

  $(".jsicon_detail").click(function () {
    $(".js_detail").hide();
    $(".jscontent-main").css({ marginRight: "-40px" });
  });

  $(".jsbtndletetran").click(function () {
    $(".delete-transaction").show();
  });

  $(".jsbtnNodelete").click(function () {
    $(".delete-transaction").hide();
  });

  $(".jsbtnaddtran").click(function () {
    $(".transaction").show();
  });

  $(".jsbtntran").click(function () {
    $(".transaction").hide();
    $(".Edit-transaction").hide();
  });

  $(".jscategory").click(function () {
    $(".category").show();
  });

  $(".jsIcon").click(function () {
    $(".category").hide();
  });

  // Model add
  $(".jsExpense").click(function () {
    $(".list-expense").show();
    $(".list-debt").hide();
    $(".list-income").hide();
  });
  $(".jsDebt").click(function () {
    $(".list-expense").hide();
    $(".list-debt").show();
    $(".list-income").hide();
  });
  $(".jsIncome").click(function () {
    $(".list-expense").hide();
    $(".list-debt").hide();
    $(".list-income").show();
  });

  // $(".btnCancelAdd").click(function() {
  //     $(".overlay").hide();
  //     $(".model").hide();
  // });
  // //model find
  // $(".searc").click(function() {
  //     $(".find").show();
  // });
  // $(".find-close").click(function() {
  //     $(".find").hide();
  // });
  // // Process Login
  // $("#btnLogin").click(function() {
  //     var userName = $("#inputUserName").val();
  //     var password = $("#inputPassword").val();

  //     if (userName == "" || password == "") {
  //         alert("Bạn phải nhập tài khoản và mật khẩu!");
  //     }
  // });

  // Model add
  $(".js-btn").click(function () {
    $(".modal-wrap").show();
  });

  // Model add
  $(".modal-list-category").click(function () {
    $(".overlay__detail").show();
  });

  $(".js-modal-close").click(function () {
    $(".modal-wrap").hide();
  });

  $(".js-detail-close").click(function () {
    $(".overlay__detail").hide();
  });

  // Add Transaction
  // $(".list-transaction").on('click', function() {
  //   var spend_id = $(".spend_id").text();
  //   var group_name = $("#group_name").text();
  //   var money = $(".group_name").text();

  //   $.ajax({
  //     url: "transaction_details.php",
  //     method: "POST",
  //     data: {
  //       spend_id:spend_id,
  //       group_name:group_name,
  //       money:money
  //     },
  //     success:function(data) {
  //       alert("Thanh cong");
  //     }
  //   });
  // });
});
