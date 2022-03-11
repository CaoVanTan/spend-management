<div class="transaction">
    <form method="post" action="../../process/customer/add_transaction.php" class="add-transaction">
        <div class="header-add-tran">
            <span>
                Thêm giao dịch
            </span>
        </div>
        <div class="content-add-tran">
            <div class="d-flex justify-content-between">
                <div class="jscategory content-list-item" style="cursor:pointer;">
                    <div class="content-list-item1">
                        <label for="tranGroup" class="form-label" style="margin-bottom: 0;opacity: 0.8;">Nhóm:</label>
                        <select class="form-select" aria-label="Default select example" style="cursor: pointer;" name="tranGroup">
                            <?php
                            $sql_add = "SELECT * FROM groups";
                            $result_add = mysqli_query($con, $sql_add);
                            if (mysqli_num_rows($result_add) > 0) {
                                echo '<option>Chọn nhóm</option>';
                                while ($row_add = mysqli_fetch_assoc($result_add)) {
                                    echo '<option value="' . $row_add['group_id'] . '">' . $row_add['group_name'] . '</option>';
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
                        <input name="tranMoney" id="inputMoney" required type="text" class="input" style="opacity: 1;" placeholder="0">
                    </div>
                </div>
                <div class="content-list-item" style="cursor:pointer !important;">
                    <div class="content-list-item1">
                        <p style="margin-bottom: 6px;opacity: 0.8;">Ngày</p>
                    </div>
                    <div class="content-list-item2">
                        <input name="tranDate" id="inputDate" value="<?php echo date("Y-m-d") ?>" required type="date" class="w-100 text-uppercase" style="border: none; outline: none; cursor:pointer !important;">
                    </div>
                </div>
            </div>
        </div>
        <div class="content-list-item" style="padding: 10px; margin:0 40px; width:calc(100% - 80px)">
            <div class="content-list-item1">
                <p class="mb-2 w-100" style="opacity: 0.8;">Ghi chú</p>
            </div>
            <div class="content-list-item2">
                <input name="tranNote" id="inputNote" type="text" class="input w-100" placeholder="Ghi chú">
            </div>
        </div>
        <div class="button1">
            <div class="d-md-flex justify-content-md-end">
                <button class="jsbtntran btn btn-cancel" type="button">Hủy</button>
                <button name="btnAddTran" class="btn btn-save" type="submit">Lưu</button>
            </div>
        </div>
    </form>
</div>