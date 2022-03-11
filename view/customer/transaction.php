<?php
if (!isset($_SESSION)) {
    session_start();
}
include_once '../../partials-front/header.php';
include_once '../../config/config.php';
$lastmonth1 = date("Y-m", mktime(0, 0, 0, date("m") - 1, date("d"), date("Y")));
$lastmonth2 = date("Y-m", mktime(0, 0, 0, date("m") - 2, date("d"), date("Y")));
$lastmonth3 = date("d/m/Y", mktime(0, 0, 0, date("m") - 2, 1, date("Y")));
$lastmonth4 = date("d/m/Y", mktime(0, 0, 0, date("m") - 1, 0, date("Y")));
?>

<section class="position-relative">
    <div class="container">
        <?php
        include_once '../../partials-front/header_navbar.php';
        ?>
    </div>

    <?php
    include_once '../../partials-front/header_transaction.php';
    ?>

    <div class="content">
        <div class="jscontent-main content-main">
            <div class="header-content">
                <div class="header-item">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link nav-link1 jslastmonth2" href="#">
                                <?php echo $lastmonth3;
                                echo " - ";
                                echo $lastmonth4 ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link1 jslastmonth1" href="#">Tháng trước</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link1 jsthistmonth" href="#">Tháng này</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- No transaction -->
            <div class="jsmain">
                <div class="main-item">
                    <span style="font-size: 80px;">:-)</span>
                    <div>
                        <span>Không có giao dịch</span>
                    </div>
                </div>
            </div>

            <!-- Transactions -->
            <div class="thisMonth">
                <div class="InOutflow">
                    <span>Tổng số tiền chi tiêu</span>
                    <span style="color: red;">-8,000,000.00 ₫</span>
                </div>
                <div class="view-report">
                    <a href="./report.php" class="text-uppercase" style="text-decoration: none;">Xem báo cáo cho giai đoạn này</a>
                </div>

                <div style="height: 30px; background-color: #e9ecef ;">
                </div>
                <div class="datetime">
                    <div class="item__transaction-date">
                        <div class="d-flex">
                            <div class="view-day">
                                <span>08</span>
                            </div>
                            <div class="view-month d-flex flex-column justify-content-between">
                                <span class="view-month-day">Thứ Tư</span>
                                <span>Tháng ba, 2022</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="transaction__item-money">-8,000,000 ₫</span>
                        </div>
                    </div>

                    <div class="item__transaction">
                        <?php
                        $username = $_SESSION['CurrentUser'];
                        $sql = "SELECT sp.*, g.*, u.* FROM spending sp, groups g, users u WHERE sp.group_id = g.group_id AND sp.user_id = u.user_id AND u.user_name = '$username'";
                        $result = mysqli_query($con, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<div id="' . $row['spend_id'] . '" class="text-decoration-none list-transaction">';
                                echo    '<div class="item-transation">';
                                echo        '<div class="item-transation-name">';
                                echo            '<span id="" class="group_name">' . $row['group_name'] . '</span>';
                                echo        '</div>';
                                echo        '<span id="" class="item-transation-money money">-' . $row['money'] . '<span class="text-decoration-underline ps-1">đ</span></span>';
                                echo    '</div>';
                                echo '</div>';
                            }
                        }
                        ?>
                        <!-- <img src="https://static.moneylover.me/img/icon/ic_category_transport.png" alt="" style="height: 35px;"> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="load_tran">
    </div>

    <div id="load_tran2">
    </div>

    <?php

    // Add Transaction
    include_once "./transaction_add.php";

    // Edit Transaction
    // include_once "./transaction_edit.php";

    // Delete Transaction
    include_once "./transaction_delete.php";
    ?>
</section>

<?php
include_once '../../partials-front/footer.php'
?>