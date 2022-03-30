<div class="js_add-group add-group">
    <div class="add-group-item">
        <div class="header-add-group">
            <h5>Thêm nhóm chi tiêu</h5>
        </div>
        <form method="POST" action="../../process/customer/add_group.php">
            <div class="name-add-group">
                <div class="content-list-item1" style="padding: 5px 20px;">
                    <p class=" w-100" style="opacity: 0.8;margin-bottom: 0px;">Tên nhóm chi tiêu</p>
                </div>
                <div class="content-list-item2" style="padding: 5px 20px;">
                    <input name="groupName" id="inputGroupName" required type="text" class="inputGroupName input w-100" placeholder="Tên nhóm chi tiêu">
                </div>
            </div>
            <div class="button1">
                <div class="d-md-flex justify-content-md-end">
                    <button class="jsbtnGroup btn btn-cancel" type="button">Hủy</button>
                    <button name="btnAddGroup" class="btn-group btn btn-save" type="submit">Lưu</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
$sql_get_group = "SELECT * FROM groups WHERE group_name = '$groupName'";
$result_get_group = mysqli_query($con, $sql_get_group);

echo "$('.btn-group').click(function() {";
        if(mysqli_num_rows($result_get_group) > 0) {
            echo "<script>
                    alert('Nhóm chi tiêu đã tồn tại.');
                    event.preventDefault();
                </script>";
        }
echo " });";
?>