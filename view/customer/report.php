<?php
include_once '../../partials-front/header.php';
?>
<section>
    <div class="container">
        <?php
        include_once '../../partials-front/header_navbar.php';
        ?>
    </div>

    <?php
    include_once '../../partials-front/header_transaction.php';
    ?>

    <div class="main__report">
        <div class="report">
            <div class="report__top flex">
                <div class="report__text">
                    <h5>Thu nhập ròng</h5>
                </div>
            </div>
            <div class="report__chart">
                <canvas id="myChart" style="width:80%; padding:68px"></canvas>
                <script>
                    var xValues = ["1", "3", "5", "7", "9", "11", "13", "15", "17", "19", "21", "23", "25", "27", "29",
                        "31"
                    ];
                    var Moneys = [0, 200, 400, 800, 1000];
                    var Colors = ["red", "green", "blue", "orange", "brown"];

                    new Chart("myChart", {
                        type: "bar",
                        data: {
                            labels: xValues,
                            datasets: [{
                                backgroundColor: Colors,
                                data: Moneys
                            }]
                        },
                        options: {
                            legend: {
                                display: false
                            },
                            title: {
                                display: true,
                                text: "Biểu đồ thu nhập"
                            }
                        }
                    });
                </script>
            </div>
            <div class="js-btn report__bottom flex">
                <div class="report__time">
                    <p>Thứ tư 02/03/2022</p>
                </div>
                <div class="report__money">
                    <div class="money-value">
                        0đ
                    </div>
                    <div class="icon-arrow">
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="js-modal-wrap">
        <div class="modal-container">
            <div class="modal-top bb">
                <div class="modal-close js-modal-close">
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <div class="modal-text">
                    <h4>Thứ tư 02/03/2022</h4>
                </div>
            </div>
            <div class="modal-main">
                <div class="modal-title">
                    <div class="modal-wrap1 flex">
                        <div class="modal-label">
                            <p>Dòng vào</p>
                        </div>
                        <div class="modal-money">
                            <p style="color: blue;">0 đ</p>
                        </div>
                    </div>
                    <div class="modal-wrap1 flex">
                        <div class="modal-label">
                            <p>Chảy ra</p>
                        </div>
                        <div class="modal-money color">
                            <p>-2.00 đ</p>
                        </div>
                    </div>
                </div>
                <div class="modal-list bb">
                    <div class="modal-item flex">
                        <div class="modal-date">
                            <div class="day">
                                <h2 class="day-stt">02</h2>
                            </div>
                            <div class="date">
                                <span class="date-name">Thứ tư</span>
                                <span class="month">Tháng 3 Năm 2022</span>
                            </div>
                        </div>
                        <div class="modal-amount">
                            <span class="amount-money" style="font-weight: bold;">-2.00 đ</span>
                        </div>
                    </div>
                </div>
                <div class="modal-list-category">
                    <div class="modal-list flex">
                        <div class="modal-category">
                            <div class="modal-img">
                                <img src="https://static.moneylover.me/img/icon/ic_category_foodndrink.png" alt="" class="img-modal">
                            </div>
                            <div class="modal-name">
                                <h5>Thực phẩm và đồ uống</h5>
                            </div>
                        </div>
                        <div class="modal-amount">
                            <span class="amount-money color">-2.00 đ</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="overlay__detail">
        <div class="modal-details">
            <div class="modal-top bb">
                <div class="modal-close js-detail-close">
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <div class="modal-text">
                    <h4>Chi tiết giao dịch</h4>
                </div>
            </div>
            <div class="details-content">
                <div class="modal-list flex">
                    <div class="modal-category">
                        <div class="modal-img">
                            <img src="https://static.moneylover.me/img/icon/ic_category_foodndrink.png" alt="" class="img-modal">
                        </div>
                        <div class="modal-name bb">
                            <h5>Thực phẩm và đồ uống</h5>
                            <span>Dung Bui</span>
                            <p class="modal-date">Thứ tư, 02/03/2022</p>
                        </div>
                    </div>
                </div>
                <h3 class="total-money" style="color: red;margin-left: 95px;">
                    -3.00 ₫
                </h3>
            </div>
        </div>
    </div>

</section>
<?php include '../../partials-front/footer.php' ?>