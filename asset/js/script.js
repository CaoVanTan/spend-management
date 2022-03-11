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

  // Add Transaction
  $(".btn-save").click(function () {
    var money = $("#inputMoney").val();
    var date = $("#inputDate").val();
    var note = $("#inputNote").val();
    $.ajax({
      url: "../../process/customer/add_transaction.php",
      type: "POST",
      data: {
        money: money,
        date: date,
        note: note,
      },
      success: function (response) {
        if (response == "Success") {
          console.log(money);
          console.log(date);
          console.log(note);
        }
      },
    });
  });

  $(".list-item-expense").click(function () {
    var group_id = $(this).attr("id");

    $.ajax({
      url: "../../process/customer/add_transaction.php",
      type: "POST",
      data: {
        group_id: group_id,
      },
      success: function (response) {
        if (response == group_id) {
          alert(group_id);
        } else {
          alert(response);
        }
      },
    });
    $(".category").hide();
  });

  $(".jsbtnaddtran").click(function () {
    $("#load_tran").load("../../view/customer/transaction_add.php");
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
});
