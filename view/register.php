<?php include_once '../partials-front/header.php'?>

<body>

    <div class="main__login">
        <div class="container">
            <div class="row">
                <div class="col-md-12 my-5">
                    <a href="./index.php">
                        <img src="../asset//img/logo.png" alt="" class="img-logo">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="wrap__login">
        <div class="container__login">
            <div class="row">
                <div class="col-md-7">
                    <div class="wrap__form">
                        <div class="form__title-text">
                            <h2>Đăng ký</h2>
                        </div>
                        <div class="form__body">
                            <div class="account fl">
                                <div class="form">
                                    <input class="input__text" type="email" id="reg_email" placeholder="Email" required>
                                    <input class="input__text" type="text" id="reg_username" placeholder="Tên đăng nhập" required>
                                    <input class="input__text" type="password" id="reg_pass" placeholder="Mật khẩu" required>
                                    <button class="form__btn mt-2" type="submit" id="reg">ĐĂNG KÝ</button>
                                </div>
                                <div class="form__suggest">
                                    <p class="form__suggest-text">Bạn đã có tài khoản?
                                        <a href="./login.php" class="form__suggest-text-link">Đăng nhập</a>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__login">
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
<script>
$('#reg').click(function() {
    $Username = $("#reg_username").val();
    $Pass = $("#reg_pass").val();
    $Email = $('#reg_email').val();
    if ($Username == "" || $Pass == "" || $Email == "") {
        alert("Vui lòng nhập đầy đủ thông tin !!");
    } else if ($Username.length < 6) {
        alert("Tài khoản phải lớn hơn 6 ký tự!");

    } else if ($Pass.length < 6) {
        alert("Mật khẩu phải lớn hơn 6 ký tự!");

    } else {
        $.ajax({
            url: "../process/register.php",
            type: "POST",
            data: {
                Username: $Username,
                Pass: $Pass,
                Email: $Email,
            },
            success: function(response) {
                // alert(response);
                if (response == "Thanhcong") {
                    alert("Bạn đã đăng ký thành công.");
                    window.location.href = "../view/login.php";
                } else if (response == "TK") {
                    alert("Tài khoản của bạn đã bị trùng.");
                } else if (response == "Email") {
                    alert("Email của bạn đã bị trùng.");
                } else if (response == "Sai") {
                    alert("Hệ thống lỗi vui lòng thử lại.");
                } else {
                    alert("Hệ thống lỗi vui lòng thử lại!");
                }

            }

        })

    }
});
</script>
<?php include '../partials-front/footer.php' ?>