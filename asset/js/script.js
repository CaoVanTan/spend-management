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

  // Check money
//   function setInputFilter(textbox, inputFilter) {
//     [
//       "input",
//       "keydown",
//       "keyup",
//       "mousedown",
//       "mouseup",
//       "select",
//       "contextmenu",
//       "drop",
//     ].forEach(function (event) {
//       textbox.addEventListener(event, function () {
//         if (inputFilter(this.value)) {
//           this.oldValue = this.value;
//           this.oldSelectionStart = this.selectionStart;
//           this.oldSelectionEnd = this.selectionEnd;
//         } else if (this.hasOwnProperty("oldValue")) {
//           this.value = this.oldValue;
//           this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
//         } else {
//           this.value = "";
//         }
//       });
//     });
//   }

//   setInputFilter(document.getElementById("inputMoney"), function (value) {
//     return /^-?\d*$/.test(value);
//   });
});
