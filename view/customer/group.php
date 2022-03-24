<?php
include_once '../../partials-front/header.php';
if(!isset($_SESSION)) {
    session_start();
}
?>
<section class="position-relative">
    <?php
    include_once '../../partials-front/header_navbar.php';
    include_once '../../partials-front/header_group.php';
    ?>

    <div class="main-group">
        <div class="js_main_group main-group-item">
            <div class="header-main-group">
                <span>NHÓM CHI TIÊU</span>
            </div>

            <?php
                include_once '../../process/customer/get_groups.php';
                if(mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo '<div id="'. $row['group_id'] .'" class="list-expense">
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

    <div id="load_group">
    </div>

    <div id="load_group2">
    </div>
</section>


<?php
include_once './group_add.php';
include_once './group_delete.php';
include_once '../../partials-front/footer.php';
?>