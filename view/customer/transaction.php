<?php
include_once '../../partials-front/header.php';
include_once '../../config/config.php';
// include_once '../../process/customer/getTransaction.php';
?>

<section class="position-relative">
    <div class="container">
        <?php
        include_once '../../partials-front/header_navbar.php';
        ?>
    </div>

    <?php
    include_once '../../partials-front/header_transaction.php';
    ?>

    <div class="content">
        <div class="jscontent-main content-main">
            <div class="header-content">
                <div class="header-item">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link nav-link1 jslastmonth2" href="#">01/01/2022 - 31/01/2022</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link1 jslastmonth1" href="#">Tháng trước</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link1 jsthistmonth" href="#">Tháng này</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- No transaction -->
            <div class="jsmain">
                <div class="main-item">
                    <span style="font-size: 80px;">:-)</span>
                    <div>
                        <span>Không có giao dịch</span>
                    </div>
                </div>
            </div>
            <!-- Transactions -->
            <div class="thisMonth">
                <!-- <div class="InOutflow">
                    <span>Inflow</span>
                    <span style="color: green;">0 ₫</span>
                </div> -->
                <div class="InOutflow">
                    <span>Tổng số tiền chi tiêu</span>
                    <span style="color: red;">-8,000,000.00 ₫</span>
                </div>
                <!-- <hr style="margin-left: 62%;width: 30%;margin-bottom: 10px;margin-top: 10px;">
                <div class="KQ">
                    <span>-8,000,000.00 ₫</span>
                </div> -->
                <div class="view-report">
                    <a href="#" class="text-uppercase" style="text-decoration: none;">Xem báo cáo cho giai đoạn này</a>
                </div>

                <?php
                    $sql = "SELECT sp.*, g.* FROM spending sp, groups g WHERE sp.group_id = g.group_id AND MONTH(spend_day) = '.$thisMonth.'";
                    $result = mysqli_query($con, $sql);
                ?>
                <div style="height: 30px; background-color: #e9ecef ;">
                </div>
                <div class="datetime">
                    <div class="item__transaction-date">
                        <div class="d-flex">
                            <div class="view-day">
                                <span>03</span>
                            </div>
                            <div class="view-month d-flex flex-column justify-content-between">
                                <span class="view-month-day">Thứ Năm</span>
                                <span>Tháng ba, 2022</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="transaction__item-money">-8,000,000 ₫</span>
                        </div>
                    </div>

                    <div class="item__transaction">
                        <?php
                            $date = getdate();
                            $thisMonth = $date['mon'];
                            echo $thisMonth;
                            $sql = "SELECT sp.*, g.* FROM spending sp, groups g WHERE sp.group_id = g.group_id AND MONTH(spend_day) = '.$thisMonth.'";
                            $result = mysqli_query($con, $sql);

                            if(mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo '<div class="list-transaction">';
                                    echo    '<div class="item-transation">';
                                    echo        '<div class="item-transation-name">';
                                    echo            '<span>'.$row['group_name'].'</span>';
                                    echo        '</div>';
                                    echo        '<span class="item-transation-money">'.$row['money'].'</span>';
                                    echo    '</div>';
                                    echo '</div>';
                                }
                            }


                                    // $str = explode('-', $row['spend_day'])[1];
                                    // echo "Tháng: ".$str."<hr>";
                                    ?>
                                    <!-- <img src="https://static.moneylover.me/img/icon/ic_category_transport.png" alt="" style="height: 35px;"> -->




                    </div>
                </div>
            </div>
        </div>
    </div>
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
                    <span class="toolbar-detail-title">Chi tiết về giao dịch</span>
                    <div class="toolbar-detail-action">
                        <button type="button" class="jsbtndletetran btn btnDE">Xóa</button>
                        <button type="button" class="jsbtnedittran btn btnED">Sửa</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="cate-note">
            <div class="imgcar">
                <img src="https://static.moneylover.me/img/icon/ic_category_transport.png" alt="" style="height: 50px">
            </div>
            <div class="cate-note-amount-content">
                <span class="transaction-name">
                    Vận tải
                </span>
                <div class="date-tran">
                    Thứ năm, 03/03/2022
                </div>
                <div class="note-tran">
                    <!-- Thức ăn -->
                </div>
                <div class="amount-detail ">
                    <span>-3,000,000 ₫</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete transaction  -->
    <div class="delete-transaction">
        <div class="delete-tran">
            <div class="header-delete">
                <span>Xác nhận xóa giao dịch</span>
            </div>
            <div class="text-delete-tran">
                <span>Xóa giao dịch này?</span>
            </div>
            <div class="button-delete-tran">
                <button type="button" class="jsbtnNodelete Nodlete btn">Không</button>
                <button type="button" class="jsbtnYesdelete Yesdelete btn">Đồng ý</button>
            </div>
        </div>
    </div>

    <!-- Edit transaction -->
    <div class="Edit-transaction">
        <div class="add-transaction">
            <div class="header-add-tran">
                <span>
                    Thêm giao dịch
                </span>
            </div>
            <div class="content-add-tran">
                <!-- <div class="content-list-item">
                    <div class="content-list-item1">
                        <p style="margin-bottom: 0;opacity: 0.8;">Wallet</p>
                    </div>
                    <div class="content-list-item2">
                        <img data-v-6bc9d4d3="" src="https://static.moneylover.me/img/icon/icon.png" style="height: 20px">
                        <span style="padding-right: 125px;">anh</span>
                        <i class="fa-solid fa-angle-right" style="opacity: 0.8;"></i>
                    </div>
                </div> -->
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
                            <input id="inputMoney" type="text" class="input" style="opacity: 1;" placeholder="0">
                        </div>
                    </div>
                    <div class="content-list-item" style="cursor:pointer !important;">
                        <div class="content-list-item1">
                            <p style="margin-bottom: 0;opacity: 0.8;">Ngày</p>
                        </div>
                        <div class="content-list-item2">
                            <input value="<?php echo date("Y-m-d") ?>" required type="date" class="w-100 text-uppercase" style="border: none; outline: none; cursor:pointer !important;">
                            <!-- <i class="fa-solid fa-angle-right" style="opacity: 0.8;"></i> -->
                        </div>

                    </div>
                </div>
            </div>
            <div class="content-list-item" style="padding: 10px; margin:0 40px; width:calc(100% - 80px)">
                <div class="content-list-item1">
                    <p class="m-0 w-100" style="opacity: 0.8;">Ghi chú</p>
                </div>
                <div class="content-list-item2">
                    <input type="text" class="input w-100" placeholder="Ghi chú">
                </div>
            </div>
            <div class="button1">
                <div class="d-md-flex justify-content-md-end">
                    <button class="jsbtntran btn btn-cancel" type="button">Hủy</button>
                    <button class="btn btn-save" type="button">Lưu</button>
                </div>
            </div>
        </div>
    </div>
    <!-- add Transaaction -->
    <div class="transaction">
        <div class="add-transaction">
            <div class="header-add-tran">
                <span>
                    Thêm giao dịch
                </span>
            </div>
            <div class="content-add-tran">
                <!-- <div class="content-list-item">
                    <div class="content-list-item1">
                        <p style="margin-bottom: 0;opacity: 0.8;">Wallet</p>
                    </div>
                    <div class="content-list-item2">
                        <img data-v-6bc9d4d3="" src="https://static.moneylover.me/img/icon/icon.png" style="height: 20px">
                        <span style="padding-right: 125px;">anh</span>
                        <i class="fa-solid fa-angle-right" style="opacity: 0.8;"></i>
                    </div>
                </div> -->
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
                            <input id="inputMoney" type="text" class="input" style="opacity: 1;" placeholder="0">
                        </div>
                    </div>
                    <div class="content-list-item" style="cursor:pointer !important;">
                        <div class="content-list-item1">
                            <p style="margin-bottom: 0;opacity: 0.8;">Ngày</p>
                        </div>
                        <div class="content-list-item2">
                            <input value="<?php echo date("Y-m-d") ?>" required type="date" class="w-100 text-uppercase" style="border: none; outline: none; cursor:pointer !important;">
                            <!-- <i class="fa-solid fa-angle-right" style="opacity: 0.8;"></i> -->
                        </div>

                    </div>
                </div>
            </div>
            <div class="content-list-item" style="padding: 10px; margin:0 40px; width:calc(100% - 80px)">
                <div class="content-list-item1">
                    <p class="m-0 w-100" style="opacity: 0.8;">Ghi chú</p>
                </div>
                <div class="content-list-item2">
                    <input type="text" class="input w-100" placeholder="Ghi chú">
                </div>
            </div>
            <div class="button1">
                <div class="d-md-flex justify-content-md-end">
                    <button class="jsbtntran btn btn-cancel" type="button">Hủy</button>
                    <button class="btn btn-save" type="button">Lưu</button>
                </div>
            </div>
        </div>
    </div>

    <div class="category">
        <div class="seclect-category">
            <div class="header-category" style="padding: 25px;">
                <a href="#" class="jsIcon">
                    <svg data-v-0698e127="" data-v-6db8f2f0="" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" viewBox="0 0 24 24" aria-labelledby="ic_arrow_back" version="1.1">
                        <defs data-v-0698e127=""></defs>
                        <g data-v-0698e127="" id="Icons/account/ic_account" stroke="none" stroke-width="1" fill="rgba(0,0,0,.54)" fill-rule="evenodd">
                            <rect data-v-0698e127="" id="blue-background" fill-opacity="0" fill="#FFFFFF" x="0" y="0" width="24" height="24"></rect>
                            <polygon data-v-6db8f2f0="" id="Shape" points="19 6.415 17.585 5 12 10.585 6.415 5 5 6.415 10.585 12 5 17.585 6.415 19 12 13.415 17.585 19 19 17.585 13.415 12" data-v-0698e127=""></polygon>
                        </g>
                    </svg>
                </a>
                <span style="margin-left: 30px;font-weight: 600;font-size: 20px;">Chọn nhóm</span>
            </div>

            <div class="search-category">
                <div class="search">
                    <svg style="opacity: 0.6;" data-v-0698e127="" data-v-6db8f2f0="" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="24" viewBox="0 0 24 24" aria-labelledby="ic_search" version="1.1" class="icon-search">
                        <defs data-v-0698e127=""></defs>
                        <g data-v-0698e127="" id="Icons/account/ic_account" stroke="none" stroke-width="1" fill="black" fill-rule="evenodd">
                            <rect data-v-0698e127="" id="blue-background" fill-opacity="0" fill="#FFFFFF" x="0" y="0" width="24" height="24"></rect>
                            <path data-v-6db8f2f0="" d="M16.8472,15.1496 L16.564,15.4328 L15.5056,14.3744 C16.5632,13.068 17.2,11.408 17.2,9.6 C17.2,5.4096 13.7904,2 9.6,2 C5.4096,2 2,5.4096 2,9.6 C2,13.7904 5.4096,17.2 9.6,17.2 C11.408,17.2 13.068,16.5632 14.3744,15.5056 L15.4328,16.564 L15.1496,16.8472 L19.9512,21.6488 L21.648,19.952 L16.8472,15.1496 L16.8472,15.1496 Z M9.6008,14.8 C6.7336,14.8 4.4008,12.4672 4.4008,9.6 C4.4008,6.7328 6.7336,4.4 9.6008,4.4 C12.468,4.4 14.8008,6.7328 14.8008,9.6 C14.8008,12.4672 12.4672,14.8 9.6008,14.8 L9.6008,14.8 Z" id="icon-search" data-v-0698e127=""></path>
                        </g>
                    </svg>
                    <input type="text" placeholder="Tìm kiếm" style="border: none;outline: none;background-color: #e9ecef;margin-left: 6px;">
                </div>
            </div>

            <div class="slider-category">
                <div class="slider">
                    <ul class="nav justify-content-center">
                        <!-- <li class="nav-item">
                            <a class="jsDebt nav-link nav-link1" href="#"> Debt/Loan</a>
                        </li> -->
                        <li class="nav-item">
                            <a name="Expense" class="jsExpense nav-link nav-link1" href="#">Khoản chi tiêu</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="jsIncome nav-link nav-link1">Income</a>
                        </li> -->
                    </ul>
                </div>
            </div>
            <hr data-v-e5c19db8="" class="border-tabs" style="margin: 0">
            <!-- list expense -->
            <div class="list-expense">
                <div class="list-item-expense">
                    <img src="../../asset/img/food_drink.png" alt="" style="height: 35px">
                    <span style="padding-left: 15px;">
                        Thực phẩm và đồ uống
                    </span>
                </div>
                <div class="list-item-expense">
                    <img src="../../asset/img/transport.png" alt="" style="height: 35px">
                    <span style="padding-left: 15px;">
                        Di chuyển
                    </span>
                </div>
                <div class="list-item-expense">
                    <img src="../../asset/img/bill.png" alt="" style="height: 35px">
                    <span style="padding-left: 15px;">
                        Hóa đơn và tiện ích
                    </span>
                </div>
                <div class="list-item-expense">
                    <img src="../../asset/img/shopping.png" alt="" style="height: 35px">
                    <span style="padding-left: 15px;">
                        Mua sắm
                    </span>
                </div>
                <div class="list-item-expense">
                    <img src="../../asset/img/entertainment.png" alt="" style="height: 35px">
                    <span style="padding-left: 15px;">
                        Giải trí
                    </span>
                </div>
            </div>
            <!-- list debt -->
            <div class="list-debt">
                <div class="list-item-expense">
                    <img src="https://static.moneylover.me/img/icon/icon_140.png" alt="" style="height: 35px">
                    <span style="padding-left: 15px;">
                        Debt Collection
                    </span>
                </div>
                <div class="list-item-expense">
                    <img src="https://static.moneylover.me/img/icon/ic_category_debt.png" alt="" style="height: 35px">
                    <span style="padding-left: 15px;">
                        Debt
                    </span>
                </div>
                <div class="list-item-expense">
                    <img src="https://static.moneylover.me/img/icon/ic_category_loan.png" alt="" style="height: 35px">
                    <span style="padding-left: 15px;">
                        Loan
                    </span>
                </div>
                <div class="list-item-expense">
                    <img src="https://static.moneylover.me/img/icon/icon_141.png" alt="" style="height: 35px">
                    <span style="padding-left: 15px;">
                        Repayment
                    </span>
                </div>
            </div>
            <!-- list income -->
            <div class="list-income">
                <div class="list-item-expense">
                    <img src="https://static.moneylover.me/img/icon/icon_118.png" alt="" style="height: 35px">
                    <span style="padding-left: 15px;">
                        Collect Interest
                    </span>
                </div>
                <div class="list-item-expense">
                    <img src="https://static.moneylover.me/img/icon/ic_category_salary.png" alt="" style="height: 35px">
                    <span style="padding-left: 15px;">
                        Salary
                    </span>
                </div>
                <div class="list-item-expense">
                    <img src="https://static.moneylover.me/img/icon/ic_category_other_income.png" alt="" style="height: 35px">
                    <span style="padding-left: 15px;">
                        Other Income
                    </span>
                </div>
                <div class="list-item-expense">
                    <img src="https://static.moneylover.me/img/icon/icon_143.png" alt="" style="height: 35px">
                    <span style="padding-left: 15px;">
                        Incoming Transfer
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include_once '../../partials-front/footer.php'
?>