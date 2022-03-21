<?php
$thismonth = date("Y-m-d", mktime(0, 0, 0, date("m"), 1, date("Y")));
$thismonth1 =  date("Y-m-d", mktime(0, 0, 0, date("m")+1, 0, date("Y")));
?>
<div class="header-top position-fixed bg-white">
    <div class="select-month" for="check">
        <div class="wrapper-select-month js-select-month">
            <div class="select-month__wrap">
                <p class="text-month">Tháng này</p>
                <i class="fa-solid fa-sort-down"></i>
            </div>
            <p class="text-date" style=""><?php echo $thismonth ; echo " - ";echo $thismonth1;?></p>
        </div>
    </div>
</div>