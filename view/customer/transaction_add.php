<div class="transaction">
    <form  class="add-transaction">
        <div class="header-add-tran">
            <span>
                Thêm giao dịch
            </span>
        </div>
        <div class="content-add-tran">
            <div class="d-flex justify-content-between">
                <div class="jscategory content-list-item" style="cursor:pointer;">
                    <div class="content-list-item1">
                        <p style="margin-bottom: 0;opacity: 0.8;">Nhóm</p>
                    </div>
                    <div class="content-list-item2">
                        <img data-v-6bc9d4d3="" src="https://static.moneylover.me/img/icon/icon_not_selected.png" style="height: 20px">
                        <span class="text-input default">Chọn nhóm</span>
                        <i class="fa-solid fa-angle-right float-end" style="opacity: 0.8; margin-top:3px"></i>
                    </div>
                </div>
                <div class="content-list-item">
                    <div class="content-list-item1">
                        <p style="margin-bottom: 0;opacity: 0.8;">Số tiền</p>
                    </div>
                    <div class="content-list-item2">
                        <input name="tranMoney" id="inputMoney" required type="text" class="input" style="opacity: 1;" placeholder="0">
                    </div>
                </div>
                <div class="content-list-item" style="cursor:pointer !important;">
                    <div class="content-list-item1">
                        <p style="margin-bottom: 0;opacity: 0.8;">Ngày</p>
                    </div>
                    <div class="content-list-item2">
                        <input name="tranDate" id="inputDate" value="<?php echo date("Y-m-d") ?>" required type="date" class="w-100 text-uppercase" style="border: none; outline: none; cursor:pointer !important;">
                    </div>
                </div>
            </div>
        </div>
        <div class="content-list-item" style="padding: 10px; margin:0 40px; width:calc(100% - 80px)">
            <div class="content-list-item1">
                <p class="m-0 w-100" style="opacity: 0.8;">Ghi chú</p>
            </div>
            <div class="content-list-item2">
                <input name="tranNote" id="inputNote" type="text" class="input w-100" placeholder="Ghi chú">
            </div>
        </div>
        <div class="button1">
            <div class="d-md-flex justify-content-md-end">
                <button class="jsbtntran btn btn-cancel" type="button">Hủy</button>
                <button name="btnAddTran" class="btn btn-save" type="button">Lưu</button>
            </div>
        </div>
    </form>
</div>

<script src="../../asset/js/script.js"></script>