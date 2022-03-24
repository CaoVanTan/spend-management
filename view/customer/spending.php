<?php
session_start();
include_once '../../partials-front/header.php';
include_once '../../config/config.php';

$username = $_SESSION['CurrentUser'];
$thismonth = date("Y-m", mktime(0, 0, 0, date("m"), date("d"), date("Y")));
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
    include_once '../../partials-front/header_spending.php';
    ?>

    <div class="content">
        <div class="jscontent-main content-main">
            <div class="header-content">
                <div class="header-item">
                    <ul class="nav justify-content-center">
                        <!-- 1 cau lenh sql group theo thang neu thang day co >0 trans thi val =1 else =0 -->

                        <?php
                        $sql6 = "SELECT sp.* FROM spending sp, groups g, users u where sp.group_id = g.group_id AND sp.user_id = u.user_id AND u.user_name = '$username' AND sp.spend_day like '$thismonth%'";
                        $result6 = mysqli_query($con, $sql6);
                        if (mysqli_num_rows($result6) > 0) {
                            $thismonthVal = 1;
                        } else {
                            $thismonthVal = 0;
                        }
                        $sql6 = "SELECT sp.* FROM spending sp, groups g, users u where sp.group_id = g.group_id AND sp.user_id = u.user_id AND u.user_name = '$username' AND sp.spend_day like '$lastmonth1%'";
                        $result6 = mysqli_query($con, $sql6);
                        if (mysqli_num_rows($result6) > 0) {
                            $lastmonth1_Val = 1;
                        } else {
                            $lastmonth1_Val = 0;
                        }
                        $sql6 = "SELECT sp.* FROM spending sp, groups g, users u where sp.group_id = g.group_id AND sp.user_id = u.user_id AND u.user_name = '$username' AND sp.spend_day like '$lastmonth2%'";
                        $result6 = mysqli_query($con, $sql6);
                        if (mysqli_num_rows($result6) > 0) {
                            $lastmonth2_Val = 1;
                        } else {
                            $lastmonth2_Val = 0;
                        }
                        ?>
                        <li class="nav-item">
                            <a class="nav-link nav-link1 jslastmonth2" id="<?php echo $lastmonth2_Val ?>" href="#"><?php echo $lastmonth3;
                                                                                                                    echo " - ";
                                                                                                                    echo $lastmonth4 ?></a>
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
                        <span>Không có khoản chi tiêu</span>
                    </div>
                </div>
            </div>

            <!-- Transactions -->
            <?php
            include_once "./spending_this_month.php";
            include_once "./spending_last_month.php";
            include_once "./spending_last_month2.php";
            ?>
        </div>
    </div>

    <div id="load_tran">
    </div>

    <div id="load_tran2">
    </div>

    <?php

    // Add Transaction
    include_once "./spending_add.php";

    // Delete Transaction
    include_once "./spending_delete.php";
    ?>
</section>

<?php
include_once '../../partials-front/footer.php'
?>