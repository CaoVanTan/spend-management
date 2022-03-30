$(document).ready(function () {
  if ($(".jsthistmonth").attr("id") == "0") {
    $(".thisMonth").hide();
    $(".lastMonth2").hide();
    $(".lastMonth1").hide();
    $(".jsmain").show();
  } else {
    $(".thisMonth").show();
    $(".lastMonth2").hide();
    $(".lastMonth1").hide();
    $(".jsmain").hide();
  }

  $(".jsthistmonth").click(function () {
    if ($(".jsthismonth").attr("id") == "0") {
      $(".thisMonth").hide();
      $(".lastMonth2").hide();
      $(".lastMonth1").hide();
      $(".jsmain").show();
      console.log("0");
    } else {
      $(".lastMonth1").hide();
      $(".thisMonth").show();
      $(".lastMonth2").hide();
      $(".jsmain").hide();
      console.log("1");
    }
  });
  $(".jslastmonth1").click(function () {
    if ($(".jslastmonth1").attr("id") == "0") {
      $(".lastMonth1").hide();
      $(".lastMonth2").hide();
      $(".thisMonth").hide();
      $(".jsmain").show();
      console.log("0");
    } else {
      $(".lastMonth1").show();
      $(".thisMonth").hide();
      $(".lastMonth2").hide();
      $(".jsmain").hide();
      console.log("0");
    }
  });
  $(".jslastmonth2").click(function () {
    if ($(".jslastmonth2").attr("id") == "0") {
      $(".lastMonth1").hide();
      $(".lastMonth2").hide();
      $(".thisMonth").hide();
      $(".jsmain").show();
    } else {
      $(".lastMonth2").show();
      $(".thisMonth").hide();
      $(".lastMonth1").hide();
      $(".jsmain").hide();
    }
  });

  $(".list-transaction").click(function () {
    var spend_id = $(this).attr("id");

    $.ajax({
      url: "../../process/customer/process_id_spend.php",
      type: "POST",
      data: {
        spend_id: spend_id,
      },
      success: function (response) {
        if (response == spend_id) {
          $("#load_tran").load("../../view/customer/spending_details.php");
          $(".jscontent-main").css({ marginRight: "55%" });
        }
      },
    });
  });

  $(".jsbtnedittran").click(function () {
    $("#load_tran2").load("../../view/customer/spending_edit.php");
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

  // Model add
  $(".js-btn").click(function () {
    $(".js-modal-wrap").show();
  });

  $(".modal-list-category").click(function () {
    $(".overlay__detail").show();
  });

  $(".js-modal-close").click(function () {
    $(".js-modal-wrap").hide();
  });

  $(".js-detail-close").click(function () {
    $(".overlay__detail").hide();
  });

  // model group
  $(".list-expense").click(function () {
    $(".js_group_detail").show();
    $(".js_main_group").css({ marginRight: "45%" });
  });
  $(".jsicon_group").click(function () {
    $(".js_group_detail").hide();
    $(".js_main_group").css({ marginRight: "0%" });
  });
  $(".jsbtnaddgroup").click(function () {
    $(".js_add-group").show();
  });
  $(".jsbtnGroup").click(function () {
    $(".js_add-group").hide();
  });
  $(".jsbtneditGroup").click(function () {
    $("#load_group2").load("../../view/customer/group_edit.php");
  });
  $(".jseditbtnGroup").click(function () {
    $(".js_edit-group").hide();
  });
  $(".jsbtndleteGroup").click(function () {
    $(".js_delete-group").show();
  });
  $(".jsbtnNodeleteGroup").click(function () {
    $(".js_delete-group").hide();
  });

  // SELECT MONTH
  $(".js-select-month").click(function () {
    $(".js-overlay__select-month").show();
  });

  $(".js-close").click(function () {
    $(".js-overlay__select-month").hide();
  });

  // GROUPS
  $(".list-expense").click(function () {
    var group_id = $(this).attr("id");

    $.ajax({
      url: "../../process/customer/process_id_group.php",
      type: "POST",
      data: {
        group_id: group_id,
      },
      success: function (response) {
        if (response == group_id) {
          $("#load_group").load("../../view/customer/group_details.php");
        }
      },
    });
  });

  // Allow only numbers and decimal (Money of transaction)
  $("#inputMoney").keydown(function (event) {
    if (event.shiftKey == true) {
      event.preventDefault();
    }

    if (
      (event.keyCode >= 48 && event.keyCode <= 57) ||
      (event.keyCode >= 96 && event.keyCode <= 105) ||
      event.keyCode == 8 ||
      event.keyCode == 9 ||
      event.keyCode == 37 ||
      event.keyCode == 39 ||
      event.keyCode == 46 ||
      event.keyCode == 190
    ) {
    } else {
      event.preventDefault();
    }

    if ($(this).val().indexOf(".") !== -1 && event.keyCode == 190)
      event.preventDefault();
    //if a decimal has been added, disable the "."-button
  });
});
