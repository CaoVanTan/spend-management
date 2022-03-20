<?php
if (!isset($_SESSION)) {
    session_start();
}

include_once '../../partials-front/header.php';
?>
<section>
    <?php
    include_once '../../partials-front/header_navbar.php';
    ?>
    <div class="header-group ">
        <div class="row h-100 align-items-center justify-content-end">
            <div class="col-8">
                <ul class="nav justify-content-end">
                    <li class="nav-item ms-4">
                        <button type="button" class="jsbtnaddgroup btn">THÊM NHÓM</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="main-group">
        <div class="js_main_group main-group-item">
            <div class="header-main-group">
                <p>Khoản chi</p>
            </div>

            <?php
                include_once '../../process/customer/get_groups.php';
                if(mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo '<div class="list-expense">
                                <div class="js_list_expense list-item-expense">
                                    <span style="padding-left: 15px;">
                                        '. $row['group_name'] .'
                                    </span>
                                </div>
                            </div>';
                    }
                }
            ?>
        </div>
    </div>
</section>

<?php
include_once './group_add.php';
include_once './group_edit.php';
include_once './group_delete.php';
include_once './group_details.php';
include_once '../../partials-front/footer.php';
?>