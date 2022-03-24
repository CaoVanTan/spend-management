<div class="thisMonth">
    <div class="InOutflow">
        <span>Tổng số tiền chi tiêu</span>
        <?php
        $sqlSumMoney = "SELECT sum(money) as 'Tong', spend_day FROM spending sp, groups g, users u where sp.group_id = g.group_id AND sp.user_id = u.user_id AND u.user_name = '$username' AND sp.spend_day like '$thismonth%' group by MONTH(spend_day)";
        $resultSumMoney = mysqli_query($con, $sqlSumMoney);
        $rowSumMoney = mysqli_fetch_assoc($resultSumMoney)
        ?>
        <span style="color: red;">
            -
            <?php
            echo number_format($rowSumMoney['Tong']);
            ?>
            <span class="text-decoration-underline ps-1">đ</span>
        </span>
    </div>
    <div class="view-report">
        <a href="./report.php" class="text-uppercase" style="text-decoration: none;">Xem báo cáo cho giai đoạn này</a>
    </div>
    <?php
    $CurrentDay = 0;
    $sql1 = "SELECT sum(money) as 'Tong', spend_day FROM spending sp, groups g, users u where sp.group_id = g.group_id AND sp.user_id = u.user_id AND u.user_name = '$username' AND sp.spend_day like '$thismonth%' group by spend_day order by spend_day desc";
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
                <div style="height: 30px; background-color: #e9ecef ;">
                </div>
                <div class="datetime">
                    <div class="item__transaction-date">
                        <div class="d-flex">
                            <div class="view-day">
                                <span><?php echo $Date; ?></span>
                            </div>
                            <div class="view-month d-flex flex-column justify-content-center">
                                <span><?php echo $MY; ?></span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="transaction__item-money">-<?php echo number_format($Sum); ?><span class="text-decoration-underline ps-1">đ</span> </span>
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
                                echo        '<span id="" class="item-transation-money money">-' . number_format($row2['money']) . '<span class="text-decoration-underline ps-1">đ</span></span>';
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