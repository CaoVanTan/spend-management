<?php
include_once '../../config/config.php';
if(!isset($_SESSION)) {
    session_start();
}
$userId = $_SESSION['CurrentID'];
$group_id = $_SESSION['group_id'];
$sql = "SELECT g.*, u.user_id FROM groups g, users u WHERE g.user_id = u.user_id AND g.user_id = '$userId' AND g.group_id = '$group_id'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
?>

<div class="js_group_detail group-container">
    <div class="header-detail-container">
        <div class="toolbar-detail">
            <div class="">
                <svg class="jsicon_group" data-v-0698e127="" data-v-01db260c="" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="35" viewBox="0 0 24 24" aria-labelledby="ic_cancel" version="1.1">
                    <defs data-v-0698e127=""></defs>
                    <g data-v-0698e127="" class="toolbar-detail-close" id="Icons/account/ic_account" stroke="none" stroke-width="1" fill="rgba(0,0,0,0.54)" fill-rule="evenodd">
                        <rect data-v-0698e127="" id="blue-background" fill-opacity="0" fill="#FFFFFF" x="0" y="0" width="24" height="24"></rect>
                        <polygon data-v-01db260c="" id="Shape" points="19 6.415 17.585 5 12 10.585 6.415 5 5 6.415 10.585 12 5 17.585 6.415 19 12 13.415 17.585 19 19 17.585 13.415 12" data-v-0698e127=""></polygon>
                    </g>
                </svg>
            </div>
            <span style="margin-right: 25%;">Chi tiết về nhóm chi tiêu</span>
            <button type="button" class="jsbtndleteGroup btn  btnDE" style="color: #dc3545;">Xóa</button>
            <button type="button" class="jsbtneditGroup btn btnDE" style="color: #198754">Sửa</button>
        </div>
    </div>
    <div class="cate-note">
        <div class="imgcar">
            <img src="https://static.moneylover.me/img/icon/icon_22.png" alt="" style="height: 50px">
        </div>

        <?php
        echo '<div class="cate-note-amount-content">
                <h3 style="margin: 0px;">' . $row['group_name'] . '</h3>
            </div>';
        ?>

    </div>
</div>

<script src="../../asset/js/script.js"></script>