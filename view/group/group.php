<?php
include_once '../../partials-front/header.php';
?>
<section>
    <?php
      include_once '../../partials-front/header_navbar.php';
    ?>
    <div class="header-group ">
        <div class="row h-100 align-items-center justify-content-end">
            <div class="col-4 d-flex">
                <div class="header-icon-group">
                    <a href="../customer/transaction.php" style = "color: #000"><i class="fa-solid fa-arrow-left"></i></a>
                </div>
                <div class="header-text-group">
                    <h5 style="margin-bottom: 0">Nhóm</h5>
                </div>
            </div>
            <div class="col-8">
                <ul class="nav justify-content-end">
                    <li class="nav-item ms-4">
                        <button type="button" class="jsbtnaddgroup btn">THÊM NHÓM</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class=" main-group">
        <div class=" js_main_group main-group-item">
            <div class="header-main-group">
                <p>Khoản chi</p>
            </div>
            <div class=" list-expense">
                <div class=" js_list_expense list-item-expense">
                    <img src="https://static.moneylover.me/img/icon/ic_category_foodndrink.png" alt=""
                        style="height: 35px">
                    <span style="padding-left: 15px;">
                        Ăn uống
                    </span>
                </div>
            </div>

            <div class=" list-expense">
                <div class="list-item-expense">
                    <img src="https://static.moneylover.me/img/icon/ic_category_foodndrink.png" alt=""
                        style="height: 35px">
                    <span style="padding-left: 15px;">
                        Nhà hàng
                    </span>
                </div>
            </div>
            <div class=" list-expense">
                <div class="list-item-expense" style="border-bottom: 1px solid #ccc;">
                    <img src="https://static.moneylover.me/img/icon/ic_category_foodndrink.png" alt=""
                        style="height: 35px">
                    <span style="padding-left: 15px;">
                        Cà phê
                    </span>
                </div>
            </div>
            <div class="list-expense">
                <div class="list-item-expense">
                    <img src="https://static.moneylover.me/img/icon/icon_136.png" alt="" style="height: 35px">
                    <span style="padding-left: 15px;">
                        Hóa đơn & Tiện ích
                    </span>
                </div>
            </div>
            <div class=" list-expense">
                <div class="list-item-expense">
                    <img src="https://static.moneylover.me/img/icon/icon_134.png" alt="" style="height: 35px">
                    <span style="padding-left: 15px;">
                        Điện thoại
                    </span>
                </div>
            </div>
            <div class=" list-expense">
                <div class="list-item-expense" style="border-bottom: 1px solid #ccc;">
                    <img src="https://static.moneylover.me/img/icon/icon_124.png" alt="" style="height: 35px">
                    <span style="padding-left: 15px;">
                        Nước
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- group detail -->
    <div class="js_group_detail group-container">
        <div class="header-detail-container">
            <div class="toolbar-detail">
                <svg class="jsicon_group" data-v-0698e127="" data-v-01db260c="" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="35" viewBox="0 0 24 24"
                    aria-labelledby="ic_cancel" version="1.1">
                    <defs data-v-0698e127=""></defs>
                    <g data-v-0698e127="" id="Icons/account/ic_account" stroke="none" stroke-width="1"
                        fill="rgba(0,0,0,0.54)" fill-rule="evenodd">
                        <rect data-v-0698e127="" id="blue-background" fill-opacity="0" fill="#FFFFFF" x="0" y="0"
                            width="24" height="24"></rect>
                        <polygon data-v-01db260c="" id="Shape"
                            points="19 6.415 17.585 5 12 10.585 6.415 5 5 6.415 10.585 12 5 17.585 6.415 19 12 13.415 17.585 19 19 17.585 13.415 12"
                            data-v-0698e127=""></polygon>
                    </g>
                </svg>
                <span style="margin-right: 40%;">Chi tiết về nhóm</span>
                <button type="button" class="jsbtndleteGroup btn  btnDE" style="color: #dc3545;">Xóa</button>
                <button type="button" class="jsbtneditGroup btn btnDE" style="color: #198754">Sửa</button>
            </div>
        </div>
        <div class="cate-note">
            <div class="imgcar">
                <img src="https://static.moneylover.me/img/icon/ic_category_foodndrink.png" alt="" style="height: 50px">
            </div>
            <div class="cate-note-amount-content">
                <h3 style="margin: 0px;">Ăn uống</h3>
                <div class="wallet-tran">
                    Chi tiêu
                </div>
                <div class="date-tran"
                    style="width: 70px;padding: 2px;background-color: #dc3545;border-radius: 11px;color: #fff;">
                    Khoản chi
                </div>
            </div>
        </div>
    </div>
    <!-- Add group -->
    <div class="js_add-group add-group">
        <div class="add-group-item">
            <div class="header-add-group">
                <h5>Thêm nhóm</h5>
            </div>
            <div class="name-add-group">
                <div class="content-list-item1" style="padding: 5px 20px;">
                    <p class=" w-100" style="opacity: 0.8;margin-bottom: 0px;">Tên nhóm</p>
                </div>
                <div class="content-list-item2" style="padding: 5px 20px;">
                    <input name="tranNote" id="inputNote" type="text" class="input w-100" placeholder="Tên nhóm">
                </div>
            </div>
            <div class="button1">
                <div class="d-md-flex justify-content-md-end">
                    <button class="jsbtnGroup btn btn-cancel" type="button">Hủy</button>
                    <button name="btnAddGroup" class="btn btn-save" type="submit">Lưu</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit group -->
    <div class="js_edit-group edit-group">
        <div class="add-group-item">
            <div class="header-add-group">
                <h5>Sửa nhóm</h5>
            </div>
            <div class="name-add-group">
                <div class="content-list-item1" style="padding: 5px 20px;">
                    <p class=" w-100" style="opacity: 0.8;margin-bottom: 0px;">Tên nhóm</p>
                </div>
                <div class="content-list-item2" style="padding: 5px 20px;">
                    <input name="tranNote" id="inputNote" type="text" class="input w-100" placeholder="Tên nhóm">
                </div>
            </div>
            <div class="button1">
                <div class="d-md-flex justify-content-md-end">
                    <button class="jseditbtnGroup btn btn-cancel" type="button">Hủy</button>
                    <button name="btnAddGroup" class="btn btn-save" type="submit">Lưu</button>
                </div>
            </div>
        </div>
    </div>
    <!-- delete group -->
    <div class="js_delete-group delete-group">
        <div class="delete-tran">
            <div class="header-delete">
                <span>Xác nhận xóa giao dịch</span>
            </div>
            <div class="text-delete-tran">
                <span>Bạn thực sự muốn xóa?</span>
            </div>
            <div class="button-delete-tran">
                <button type="button" class="jsbtnNodeleteGroup Nodlete btn">Không</button>
                <a href="#" class="jsbtnYesdeleteGroup Yesdelete btn">Đồng ý</a>
            </div>
        </div> 
    </div>
</section>

<?php
include_once '../../partials-front/footer.php';
?>