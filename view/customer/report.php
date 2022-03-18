<?php
include_once '../../partials-front/header.php';
include_once '../../config/config.php';
$Ngay = array();
$TongTien = array();
$Songay = date("d", mktime(0, 0, 0, date("m") + 1, 0, date("Y")));
$dem = 1;
$sqlSumMoney = "SELECT sum(money) as 'Tong', Day(spend_day) as 'Day' FROM spending sp, groups g, users u where
    sp.group_id = g.group_id AND sp.user_id = u.user_id AND u.user_name = 'cvtan' AND sp.spend_day like '2022-03%' group by spend_day";
$resultSumMoney = mysqli_query($con, $sqlSumMoney);
if (mysqli_num_rows($resultSumMoney) > 0) {
    while ($row =   mysqli_fetch_assoc($resultSumMoney)) {
        for ($i = $dem; $i <= $row['Day']; $i++) {
            $Ngay[$i - 1] = $i;
            if ($i == $row['Day']) {
                $TongTien[$i - 1] = $row['Tong'];
                $dem = $row['Day'] + 1;
                // echo $dem;
            } else {
                $TongTien[$i - 1] = 0;
            }
        }
    }
    for ($i = $dem; $i <= $Songay; $i++) {
        $TongTien[$i - 1] = 0;
        $Ngay[$i - 1] = $i;
    }
}
// print_r($TongTien);
// echo '</br>';
// print_r($Ngay);
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
                    <h5>Thu nhập</h5>
                </div>
            </div>
            <div class="report__chart">
                <canvas id="myChart" style="width:80%; padding:68px"></canvas>
                <script>
                    new Chart("myChart", {
                        type: "bar",
                        data: {
                            labels: <?php echo json_encode($Ngay) ?>,
                            yValueFormatString: "#,##0.## đồng",
                            datasets: [{
                                backgroundColor: '#45F143',
                                data: <?php echo json_encode($TongTien) ?>,
                            }]
                        },
                        options: {
                            legend: {
                                display: false
                            },
                            title: {
                                display: false
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