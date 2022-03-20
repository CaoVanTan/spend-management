<div class="js_add-group add-group">
    <div class="add-group-item">
        <div class="header-add-group">
            <h5>Thêm nhóm</h5>
        </div>
        <form method="POST" action="../../process/customer/add_group.php">
            <div class="name-add-group">
                <div class="content-list-item1" style="padding: 5px 20px;">
                    <p class=" w-100" style="opacity: 0.8;margin-bottom: 0px;">Tên nhóm</p>
                </div>
                <div class="content-list-item2" style="padding: 5px 20px;">
                    <input name="groupName" id="inputGroupName" type="text" class="input w-100" placeholder="Tên nhóm">
                </div>
            </div>
            <div class="button1">
                <div class="d-md-flex justify-content-md-end">
                    <button class="jsbtnGroup btn btn-cancel" type="button">Hủy</button>
                    <button name="btnAddGroup" class="btn btn-save" type="submit">Lưu</button>
                </div>
            </div>
        </form>
    </div>
</div>