<?php
include_once '../../partials-front/header.php';
$lastmonth = date("Y-m-d", mktime(0, 0, 0, date("m") - 1, 1, date("Y")));
$lastmonth1 = date("Y-m-d", mktime(0, 0, 0, date("m"), 0, date("Y")));
?>

<section>
    <div class="container">
        <?php
        include_once '../../partials-front/header_navbar.php';
        ?>
    </div>

    <?php
    include_once '../../partials-front/header_report.php';
    ?>
    <div class="overlay__select-month js-overlay__select-month">
        <div class="wrapper js-select-month-wrapper">
            <div class="select-month-wrap">
                <div class="box-heading bd">
                    <h5 class="title-month">Chọn Tháng</h5>
                    <i class="fa-solid fa-xmark js-close"></i>
                </div>
                <div class="box-month this-month bd">
                    <div class="box-month-select">
                        <span class="label" id="text-this-month">Tháng này</span>
                        <span class="date-time" id="d-t-this-month">
                            <?php
                            echo $thismonth;
                            echo " - ";
                            echo $thismonth1;
                            ?>
                        </span>
                    </div>
                </div>
                <div class="box-month last-month bd">
                    <div class="box-month-select">
                        <span class="label" id="text-last-month">Tháng trước</span>
                        <span class="date-time" id="d-t-last-month">
                            <?php
                            echo $lastmonth;
                            echo " - ";
                            echo $lastmonth1;
                            ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main__report">
        <div class="report">
            <div class="load_report"></div>
        </div>
    </div>
</section>
<?php include '../../partials-front/footer.php' ?>

<script>
    $(document).ready(function() {
        $(".load_report").load("../customer/report_this_month.php");

        $(".this-month").click(function() {
            $(".load_report").load("../customer/report_this_month.php");
            var Thismonth = $("#text-this-month").text();
            var Date_t_month = $("#d-t-this-month").text();
            $(".text-month").text(Thismonth);
            $(".text-date").text(Date_t_month);
            $(".overlay__select-month").hide();
        })

        $(".last-month").click(function() {
            $(".load_report").load("../customer/report_last_month.php");
            var Lastmonth = $("#text-last-month").text();
            var Date_l_month = $("#d-t-last-month").text();
            $(".text-month").text(Lastmonth);
            $(".text-date").text(Date_l_month);
            $(".overlay__select-month").hide();
        })
    })
</script>