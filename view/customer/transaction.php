<?php
if (!isset($_SESSION)) {
    session_start();
}
include_once '../../partials-front/header.php';
include_once '../../config/config.php';
$username = $_SESSION['CurrentUser'];
$thismonth = date("Y-m", mktime(0, 0, 0, date("m"), date("d"), date("Y")));
$lastmonth1 = date("Y-m", mktime(0, 0, 0, date("m")-1, date("d"), date("Y")));
$lastmonth2 = date("Y-m", mktime(0, 0, 0, date("m")-2, date("d"), date("Y")));
$lastmonth3 = date("d/m/Y", mktime(0, 0, 0, date("m")-2, 1, date("Y")));
$lastmonth4 = date("d/m/Y", mktime(0, 0, 0, date("m")-1, 0, date("Y")));
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
                        <!-- 1 cau lenh sql group theo thang neu thang day co >0 trans thi val =1 else =0 -->

                        <?php
                            $sql6="SELECT sp.* FROM spending sp, groups g, users u where sp.group_id = g.group_id AND sp.user_id = u.user_id AND u.user_name = '$username' AND sp.spend_day like '$thismonth%'";
                            $result6 = mysqli_query($con, $sql6);
                                if (mysqli_num_rows($result6) > 0) {
                                    $thismonthVal = 1;
                                }else {
                                    $thismonthVal = 0;
                                }
                            $sql6="SELECT sp.* FROM spending sp, groups g, users u where sp.group_id = g.group_id AND sp.user_id = u.user_id AND u.user_name = '$username' AND sp.spend_day like '$lastmonth1%'";
                            $result6 = mysqli_query($con, $sql6);
                                if (mysqli_num_rows($result6) > 0) {
                                    $lastmonth1_Val = 1;
                                }else {
                                    $lastmonth1_Val = 0;
                                }
                            $sql6="SELECT sp.* FROM spending sp, groups g, users u where sp.group_id = g.group_id AND sp.user_id = u.user_id AND u.user_name = '$username' AND sp.spend_day like '$lastmonth2%'";
                            $result6 = mysqli_query($con, $sql6);
                                if (mysqli_num_rows($result6) > 0) {
                                    $lastmonth2_Val = 1;
                                }else {
                                    $lastmonth2_Val = 0;
                                }

                        ?>
                        <li class="nav-item">
                            <a class="nav-link nav-link1 jslastmonth2" id="<?php echo $lastmonth2_Val ?>" href="#"><?php echo $lastmonth3; echo " - "; echo $lastmonth4?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link1 jslastmonth1" id="<?php echo $lastmonth1_Val ?>" href="#">Tháng trước</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link1 jsthistmonth" id="<?php echo $thismonthVal ?>" href="#">Tháng này</a>
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
                    <?php

                    ?>
                    <span style="color: red;">-8,000,000.00 ₫</span>
                </div>
                <div class="view-report">
                    <a href="./report.php" class="text-uppercase" style="text-decoration: none;">Xem báo cáo cho giai đoạn này</a>
                </div>

                <div style="height: 30px; background-color: #e9ecef ;">
                </div>
                <!-- 1 cau lenh sql group theo ngay va 1 bien de chay ngay  -->
                <?php
                    $CurrentDay = 0;
                    $sql1="SELECT sum(money) as 'Tong', spend_day FROM spending sp, groups g, users u where sp.group_id = g.group_id AND sp.user_id = u.user_id AND u.user_name = '$username' AND sp.spend_day like '$thismonth%' group by spend_day";
                    $result1 = mysqli_query($con, $sql1);
                        if (mysqli_num_rows($result1) > 0) {
                            while ($row1 = mysqli_fetch_assoc($result1)) {
                                $Sum = $row1['Tong'];
                                $SpendDay = $row1['spend_day'];
                                if ($SpendDay != $CurrentDay) {
                                    $CurrentDay = $SpendDay;
                                    $DMY = strtotime($SpendDay);
                                    $MY = date("m-Y", $DMY);
                                    $Date = date("d", $DMY);
                ?>
                 <div class="datetime">
                    <div class="item__transaction-date">
                        <div class="d-flex">
                            <div class="view-day">
                                <span><?php echo $Date; ?></span>
                            </div>
                            <div class="view-month d-flex flex-column justify-content-center">
                                <!-- <span class="view-month-day">Thứ Tư</span> -->
                                <span><?php echo $MY; ?></span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="transaction__item-money"> <?php echo"-"; echo $Sum;?> </span>
                        </div>
                    </div>

                    <div class="item__transaction">
                        <?php

                        $sql2 = "SELECT sp.*, g.*, u.* FROM spending sp, groups g, users u WHERE sp.group_id = g.group_id AND sp.user_id = u.user_id AND u.user_name = '$username' AND sp.spend_day = '$SpendDay'";
                        $result2 = mysqli_query($con, $sql2);

                        if (mysqli_num_rows($result2) > 0) {
                            while ($row2 = mysqli_fetch_assoc($result2)) {
                                echo '<div id="' . $row2['spend_id'] . '" class="text-decoration-none list-transaction">';
                                echo    '<div class="item-transation">';
                                echo        '<div class="item-transation-name">';
                                echo            '<span id="" class="group_name">' . $row2['group_name'] . '</span>';
                                echo        '</div>';
                                echo        '<span id="" class="item-transation-money money">-' . $row2['money'] . '<span class="text-decoration-underline ps-1">đ</span></span>';
                                echo    '</div>';
                                echo '</div>';
                            }
                        }
                        ?>

                    </div>
                </div>


                <?php
                                }
                            }
                        }
                 ?>
            </div>
            <div class="lastMonth1">
                <div class="InOutflow">
                    <span>Tổng số tiền chi tiêu</span>
                    <?php

                    ?>
                    <span style="color: red;">-8,000,000.00 ₫</span>
                </div>
                <div class="view-report">
                    <a href="./report.php" class="text-uppercase" style="text-decoration: none;">Xem báo cáo cho giai đoạn này</a>
                </div>

                <div style="height: 30px; background-color: #e9ecef ;">
                </div>
                <!-- 1 cau lenh sql group theo ngay va 1 bien de chay ngay  -->
                <?php
                    $CurrentDay = 0;
                    $sql1="SELECT sum(money) as 'Tong', spend_day FROM spending sp, groups g, users u where sp.group_id = g.group_id AND sp.user_id = u.user_id AND u.user_name = '$username' AND sp.spend_day like '$lastmonth1%' group by spend_day";
                    $result1 = mysqli_query($con, $sql1);
                        if (mysqli_num_rows($result1) > 0) {
                            while ($row1 = mysqli_fetch_assoc($result1)) {
                                $Sum = $row1['Tong'];
                                $SpendDay = $row1['spend_day'];
                                if ($SpendDay != $CurrentDay) {
                                    $CurrentDay = $SpendDay;
                                    $DMY = strtotime($SpendDay);
                                    $MY = date("m-Y", $DMY);
                                    $Date = date("d", $DMY);
                ?>
                 <div class="datetime">
                    <div class="item__transaction-date">
                        <div class="d-flex">
                            <div class="view-day">
                                <span><?php echo $Date; ?></span>
                            </div>
                            <div class="view-month d-flex flex-column justify-content-center">
                                <!-- <span class="view-month-day">Thứ Tư</span> -->
                                <span><?php echo $MY; ?></span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="transaction__item-money"> <?php echo"-"; echo $Sum;?> </span>
                        </div>
                    </div>

                    <div class="item__transaction">
                        <?php

                        $sql2 = "SELECT sp.*, g.*, u.* FROM spending sp, groups g, users u WHERE sp.group_id = g.group_id AND sp.user_id = u.user_id AND u.user_name = '$username' AND sp.spend_day = '$SpendDay'";
                        $result2 = mysqli_query($con, $sql2);

                        if (mysqli_num_rows($result2) > 0) {
                            while ($row2 = mysqli_fetch_assoc($result2)) {
                                echo '<div id="' . $row2['spend_id'] . '" class="text-decoration-none list-transaction">';
                                echo    '<div class="item-transation">';
                                echo        '<div class="item-transation-name">';
                                echo            '<span id="" class="group_name">' . $row2['group_name'] . '</span>';
                                echo        '</div>';
                                echo        '<span id="" class="item-transation-money money">-' . $row2['money'] . '<span class="text-decoration-underline ps-1">đ</span></span>';
                                echo    '</div>';
                                echo '</div>';
                            }
                        }
                        ?>

                    </div>
                </div>


                <?php
                                }
                            }
                        }
                 ?>
            </div>
            <div class="lastMonth2">
                <div class="InOutflow">
                    <span>Tổng số tiền chi tiêu</span>
                    <?php

                    ?>
                    <span style="color: red;">-8,000,000.00 ₫</span>
                </div>
                <div class="view-report">
                    <a href="./report.php" class="text-uppercase" style="text-decoration: none;">Xem báo cáo cho giai đoạn này</a>
                </div>

                <div style="height: 30px; background-color: #e9ecef ;">
                </div>
                <!-- 1 cau lenh sql group theo ngay va 1 bien de chay ngay  -->
                <?php
                    $CurrentDay = 0;
                    $sql1="SELECT sum(money) as 'Tong', spend_day FROM spending sp, groups g, users u where sp.group_id = g.group_id AND sp.user_id = u.user_id AND u.user_name = '$username' AND sp.spend_day like '$lastmonth2%' group by spend_day";
                    $result1 = mysqli_query($con, $sql1);
                        if (mysqli_num_rows($result1) > 0) {
                            while ($row1 = mysqli_fetch_assoc($result1)) {
                                $Sum = $row1['Tong'];
                                $SpendDay = $row1['spend_day'];
                                if ($SpendDay != $CurrentDay) {
                                    $CurrentDay = $SpendDay;
                                    $DMY = strtotime($SpendDay);
                                    $MY = date("m-Y", $DMY);
                                    $Date = date("d", $DMY);
                ?>
                 <div class="datetime">
                    <div class="item__transaction-date">
                        <div class="d-flex">
                            <div class="view-day">
                                <span><?php echo $Date; ?></span>
                            </div>
                            <div class="view-month d-flex flex-column justify-content-center">
                                <!-- <span class="view-month-day">Thứ Tư</span> -->
                                <span><?php echo $MY; ?></span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="transaction__item-money"> <?php echo"-"; echo $Sum;?> </span>
                        </div>
                    </div>

                    <div class="item__transaction">
                        <?php

                        $sql2 = "SELECT sp.*, g.*, u.* FROM spending sp, groups g, users u WHERE sp.group_id = g.group_id AND sp.user_id = u.user_id AND u.user_name = '$username' AND sp.spend_day = '$SpendDay'";
                        $result2 = mysqli_query($con, $sql2);

                        if (mysqli_num_rows($result2) > 0) {
                            while ($row2 = mysqli_fetch_assoc($result2)) {
                                echo '<div id="' . $row2['spend_id'] . '" class="text-decoration-none list-transaction">';
                                echo    '<div class="item-transation">';
                                echo        '<div class="item-transation-name">';
                                echo            '<span id="" class="group_name">' . $row2['group_name'] . '</span>';
                                echo        '</div>';
                                echo        '<span id="" class="item-transation-money money">-' . $row2['money'] . '<span class="text-decoration-underline ps-1">đ</span></span>';
                                echo    '</div>';
                                echo '</div>';
                            }
                        }
                        ?>

                    </div>
                </div>


                <?php
                                }
                            }
                        }
                 ?>
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