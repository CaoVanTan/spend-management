<?php
session_start();
include_once '../../config/config.php';
?>
<div class="Edit-transaction">
    <form method="post" action="../../process/customer/edit_transaction.php" class="add-transaction">
        <div class="header-add-tran">
            <span>
                Sửa giao dịch
            </span>
        </div>
        <?php
            if(isset($_SESSION['id_tran'])) {
                $spend_id = $_SESSION['id_tran'];

                $sql_cr = "SELECT s.*, g.* FROM spending s, groups g WHERE g.group_id = s.group_id AND spend_id  = '$spend_id'";
                $result_cr = mysqli_query($con, $sql_cr);
                $row_cr = mysqli_fetch_assoc($result_cr);
            }
        ?>
        <div class="content-add-tran">
            <div class="d-flex justify-content-between">
                <div class="jscategory content-list-item" style="cursor:pointer;">
                    <div class="content-list-item1">
                        <label for="tranGroup" class="form-label" style="margin-bottom: 0;opacity: 0.8;">Nhóm:</label>
                        <select class="form-select" aria-label="Default select example" style="cursor: pointer;" name="tranGroup">
                            <?php
                            $sql_edit = "SELECT * FROM groups";
                            $result_edit = mysqli_query($con, $sql_edit);
                            if (mysqli_num_rows($result_edit) > 0) {
                                echo '<option value="' . $row_cr['group_id'] . '">' . $row_cr['group_name'] . '</option>';
                                while ($row_edit = mysqli_fetch_assoc($result_edit)) {
                                    if($row_cr['group_id'] == $row_edit['group_id']) {
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
                        <input name="tranMoney" id="inputMoney" required type="text" class="input" value="<?php echo $row_cr['money'] ?>" style="opacity: 1;" placeholder="0">
                    </div>
                </div>
                <div class="content-list-item" style="cursor:pointer !important;">
                    <div class="content-list-item1">
                        <p style="margin-bottom: 6px;opacity: 0.8;">Ngày</p>
                    </div>
                    <div class="content-list-item2">
                        <input name="tranDate" id="inputDate" value="<?php echo $row_cr['spend_day'] ?>" required type="date" class="w-100 text-uppercase" style="border: none; outline: none; cursor:pointer !important;">
                    </div>
                </div>
            </div>
        </div>
        <div class="content-list-item" style="padding: 10px; margin:0 40px; width:calc(100% - 80px)">
            <div class="content-list-item1">
                <p class="m-0 w-100" style="opacity: 0.8;">Ghi chú</p>
            </div>
            <div class="content-list-item2">
                <input name="tranNote" type="text" class="input w-100" value="<?php echo $row_cr['note'] ?>" placeholder="Ghi chú">
            </div>
        </div>
        <div class="button1">
            <div class="d-md-flex justify-content-md-end">
                <button name="btnCancelEdit" class="jsbtntran btn btn-cancel" type="button">Hủy</button>
                <button name="btnEditTran" class="btn btn-save" type="submit">Lưu</button>
            </div>
        </div>
    </form>
</div>

<script src="../../asset/js/script.js"></script>