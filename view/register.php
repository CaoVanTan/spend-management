<?php include_once '../partials-front/header.php'?>
<body>
    
    <div class="main__login">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <img src="../asset//img/logo_transparent.png" alt="" class="img-logo">
                    </div>
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
                                <form action="" class="form">
                                    <input class="input__text" required type="email" placeholder="Email">
                                    <input class="input__text" required type="text" placeholder="Tên đăng nhập">
                                    <input class="input__text" required type="password" placeholder="Mật khẩu">
                                    <button class="form__btn mt-2">ĐĂNG KÝ</button>
                                </form>
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
<?php include '../partials-front/footer.php' ?>