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
        </div>
    </div>
</section>
<?php include '../../partials-front/footer.php' ?>