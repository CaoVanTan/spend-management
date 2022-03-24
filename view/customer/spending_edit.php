<?php
include_once '../../config/config.php';
session_start();
?>
<div class="Edit-transaction">
    <form method="post" action="../../process/customer/edit_spending.php" class="add-transaction">
        <div class="header-add-tran">
            <span>
                Sửa khoản chi tiêu
            </span>
        </div>
        <?php
        if (isset($_SESSION['spend_id'])) {
            $spend_id = $_SESSION['spend_id'];

            $sql_cr = "SELECT s.*, g.* FROM spending s, groups g WHERE g.group_id = s.group_id AND spend_id  = '$spend_id'";
            $result_cr = mysqli_query($con, $sql_cr);
            $row_cr = mysqli_fetch_assoc($result_cr);
        }
        ?>
        <div class="content-add-tran">
            <div class="d-flex justify-content-between">
                <div class="jscategory content-list-item" style="cursor:pointer;">
                    <div class="content-list-item1">
                        <label for="spendGroup" class="form-label" style="margin-bottom: 0;opacity: 0.8;">Nhóm chi tiêu:</label>
                        <select class="form-select" aria-label="Default select example" style="cursor: pointer;" name="spendGroup">
                            <?php
                            $user_id = $_SESSION['CurrentID'];
                            $sql_edit = "SELECT * FROM groups WHERE user_id = '$user_id' ORDER BY group_name";
                            $result_edit = mysqli_query($con, $sql_edit);
                            if (mysqli_num_rows($result_edit) > 0) {
                                echo '<option value="' . $row_cr['group_id'] . '">' . $row_cr['group_name'] . '</option>';
                                while ($row_edit = mysqli_fetch_assoc($result_edit)) {
                                    if ($row_cr['group_id'] == $row_edit['group_id']) {
                                        echo null;
                                    } else {
                                        echo '<option value="' . $row_edit['group_id'] . '">' . $row_edit['group_name'] . '</option>';
                                    }
                                }
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="content-list-item">
                    <div class="content-list-item1">
                        <p style="margin-bottom: 6px;opacity: 0.8;">Số tiền</p>
                    </div>
                    <div class="content-list-item2">
                        <input name="spendMoney" id="inputMoney" required type="text" class="input" value="<?php echo $row_cr['money'] ?>" style="opacity: 1;" placeholder="0">
                    </div>
                </div>
                <div class="content-list-item" style="cursor:pointer !important;">
                    <div class="content-list-item1">
                        <p style="margin-bottom: 6px;opacity: 0.8;">Ngày</p>
                    </div>
                    <div class="content-list-item2">
                        <input name="spendDate" id="inputDate" value="<?php echo $row_cr['spend_day'] ?>" required type="date" class="w-100 text-uppercase" style="border: none; outline: none; cursor:pointer !important;">
                    </div>
                </div>
            </div>
        </div>
        <div class="content-list-item" style="padding: 10px; margin:0 40px; width:calc(100% - 80px)">
            <div class="content-list-item1">
                <p class="m-0 w-100" style="opacity: 0.8;">Ghi chú</p>
            </div>
            <div class="content-list-item2">
                <input name="spendNote" type="text" class="input w-100" value="<?php echo $row_cr['note'] ?>" placeholder="Ghi chú">
            </div>
        </div>
        <div class="button1">
            <div class="d-md-flex justify-content-md-end">
                <button name="btnCancelEdit" class="jsbtntran btn btn-cancel" type="button">Hủy</button>
                <button name="btnEditSpend" class="btn btn-save" type="submit">Lưu</button>
            </div>
        </div>
    </form>
</div>

<script src="../../asset/js/script.js"></script>