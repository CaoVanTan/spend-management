$(document).ready(function () {
  if($(".jsthistmonth").attr('id') == '0')
  {
    $(".thisMonth").hide();
    $(".lastMonth1").hide();
    $(".lastMonth2").hide();
    $(".jsmain").show();
  }else{
    $(".lastMonth1").hide();
    $(".lastMonth2").hide();
    $(".thisMonth").show();
  }
  $(".jsthistmonth").click(function () {
    if($(".jsthismonth").attr('id') == '0')
    {
      $(".lastMonth2").hide();
      $(".lastMonth1").hide();
      $(".jsmain").show();
    }else{
      $(".lastMonth1").hide();
      $(".thisMonth").show();
      $(".lastMonth2").hide();
      $(".jsmain").hide();
    }
  });

  $(".jslastmonth1").click(function () {
    if($(".jslastmonth1").attr('id') == '0')
    {
      $(".lastMonth2").hide();
      $(".thisMonth").hide();
      $(".jsmain").show();
    }else{
      $(".lastMonth1").show();
      $(".thisMonth").hide();
      $(".lastMonth2").hide();
      $(".jsmain").hide();
    }
  });

  $(".jslastmonth2").click(function () {
    if($(".jslastmonth2").attr('id') == '0')
    {
      $(".thisMonth").hide();
      $(".jsmain").show();
    }else{
      $(".thisMonth").show();
      $(".jsmain").hide();
    }
  });

  $(".list-transaction").click(function () {
    var spend_id = $(this).attr("id");

    $.ajax({
      url: "../../process/customer/process_id_tran.php",
      type: "POST",
      data: {
        spend_id: spend_id,
      },
      success: function (response) {
        if (response == spend_id) {
          $("#load_tran").load("../../view/customer/transaction_details.php");
        }
      },
    });
    $(".jscontent-main").css({ marginRight: "690px" });
  });

  $(".jsbtnedittran").click(function () {
    $("#load_tran2").load("../../view/customer/transaction_edit.php");
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

  // Add Transaction
  $(".jsbtnaddtran").click(function () {
    $(".transaction").show();
  });

  $(".jsbtntran").click(function () {
    $(".transaction").hide();
    $(".Edit-transaction").hide();
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
});
