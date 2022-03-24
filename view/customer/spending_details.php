<?php
session_start();
include_once '../../config/config.php';

$spend_id = $_SESSION['spend_id'];
$sql = "SELECT sp.*, g.* FROM spending sp, groups g WHERE sp.group_id = g.group_id AND sp.spend_id = '$spend_id'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
?>

<div class="js_detail detail-container">
    <div class="header-detail-container">
        <div class="toolbar-detail">
            <div class="toolbar-detail-close">
                <svg class="jsicon_detail" data-v-0698e127="" data-v-01db260c="" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="35" viewBox="0 0 24 24" aria-labelledby="ic_cancel" version="1.1">
                    <defs data-v-0698e127=""></defs>
                    <g data-v-0698e127="" class="toolbar-detail-close" id="Icons/account/ic_account" stroke="none" stroke-width="1" fill="rgba(0,0,0,0.54)" fill-rule="evenodd">
                        <rect data-v-0698e127="" id="blue-background" fill-opacity="0" fill="#FFFFFF" x="0" y="0" width="24" height="24"></rect>
                        <polygon data-v-01db260c="" id="Shape" points="19 6.415 17.585 5 12 10.585 6.415 5 5 6.415 10.585 12 5 17.585 6.415 19 12 13.415 17.585 19 19 17.585 13.415 12" data-v-0698e127=""></polygon>
                    </g>
                </svg>
            </div>
            <div class="d-flex align-items-center justify-content-between w-100 ms-3">
                <span class="toolbar-detail-title">Chi tiết về khoản chi tiêu</span>
                <div class="toolbar-detail-action">
                    <button type="button" class="jsbtndletetran btn btnDE">Xóa</button>
                    <button type="button" class="jsbtnedittran btn btnED">Sửa</button>
                </div>
            </div>
        </div>
    </div>
    <div class="cate-note">
        <div class="imgcar">
            <img src="https://static.moneylover.me/img/icon/icon_22.png" alt="" style="height: 50px">
        </div>
        <div class="cate-note-amount-content">
            <?php
            $date = explode('-', $row['spend_day']);
            $spend_day = $date[2] . '/' . $date[1] . '/' . $date[0];
            echo '<span class="transaction-name">'.$row['group_name'].'</span>
                <div class="date-tran">'.$spend_day.'</div>
                <div class="note-tran">'.$row['note'].'</div>
                <div class="amount-detail">
                    <span class="detail-money">-'.number_format($row['money']).'<span class="text-decoration-underline ps-1">đ</span></span>
                </div>';
            ?>
        </div>
    </div>
</div>

<script src="../../asset/js/script.js"></script>
