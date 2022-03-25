<?php
include_once '../../config/config.php';
if(!isset($_SESSION)) {
    session_start();
}
?>

<div class="js_edit-group edit-group">
    <div class="add-group-item">
        <div class="header-add-group">
            <h5>Sửa nhóm chi tiêu</h5>
        </div>

        <form class="form_groups" method="POST" action="../../process/customer/edit_group.php">
            <?php
            if (isset($_SESSION['group_id'])) {
                $userId = $_SESSION['CurrentID'];
                $group_id = $_SESSION['group_id'];

                $sql_cr = "SELECT u.user_id, g.* FROM users u, groups g WHERE g.user_id = u.user_id AND g.group_id  = '$group_id'";
                $result_cr = mysqli_query($con, $sql_cr);
                $row_cr = mysqli_fetch_assoc($result_cr);
            }
            ?>
            <div class="name-add-group">
                <div class="content-list-item1" style="padding: 5px 20px;">
                    <p class=" w-100" style="opacity: 0.8;margin-bottom: 0px;">Tên nhóm chi tiêu</p>
                </div>
                <div class="content-list-item2" style="padding: 5px 20px;">
                    <input name="groupName" id="inputGroupName" required value="<?php echo $row_cr['group_name'];  ?>" type="text" class="inputGroupName input w-100" placeholder="Tên nhóm chi tiêu">
                </div>
            </div>
            <div class="button1">
                <div class="d-md-flex justify-content-md-end">
                    <button class="jseditbtnGroup btn btn-cancel" type="button">Hủy</button>
                    <button name="btnEditGroup" class="btn btn-save" type="submit">Lưu</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="../../asset/js/script.js"></script>