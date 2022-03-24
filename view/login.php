<?php include_once '../partials-front/header.php' ?>

<body>
    <div class="main__login">
        <div class="container">
            <div class="row">
                <div class="col-md-12 my-5">
                    <a href="./index.php">
                        <img class="img-logo" src="../asset/img/logo.png" alt="">
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
                            <h2>Đăng nhập</h2>
                        </div>
                        <div class="form__body">
                            <div class="account fl">
                                <div class="form">
                                    <input class="input__text" id="Username" required type="text" placeholder="Tên đăng nhập">
                                    <input class="input__text" id="Pass"required type="password" placeholder="Mật khẩu">
                                    <div class="form__forgot">
                                        <a href="#" class="form__forgot-link">Quên mật khẩu?</a>
                                    </div>
                                    <button class="form__btn" id="Login">ĐĂNG NHẬP</button>
                                </div>
                                <div class="form__suggest">
                                    <p class="form__suggest-text">Bạn không có tài khoản?
                                        <a href="./register.php" class="form__suggest-text-link">Đăng ký</a>
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

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
    $('#Login').click(function() {
        $Username = $("#Username").val();
        $Pass = $("#Pass").val();
        if ($Username == "" || $Pass == "") {
            alert("Vui lòng nhập đầy đủ tài khoản và mật khẩu !!");
        } else {
            $.ajax({
                url: "../process/login.php",
                type: "POST",
                data: {
                    Username: $Username,
                    Pass: $Pass,
                },
                success: function(response) {
                    if (response == "Thanhcong") {
                        window.location.href = "../view/customer/spending.php";
                    } else if (response == "Sai") {
                        alert("Sai tài khoản hoặc mật khẩu.");
                    }
                }

            })

        }
    });
</script>

<?php include '../partials-front/footer.php' ?>