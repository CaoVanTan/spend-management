<?php
session_start();
include_once '../../config/config.php';

if (isset($_SESSION['CurrentID']) && isset($_SESSION['group_id'])) {
    $user_id = $_SESSION['CurrentID'];
    $group_id = $_SESSION['group_id'];

    $sql_tran = "DELETE FROM spending WHERE user_id = '$user_id' and group_id = '$group_id'";
    $result_tran = mysqli_query($con, $sql_tran);

    if ($result_tran) {
        $sql_group = "DELETE FROM groups WHERE user_id = '$user_id' and group_id = '$group_id'";
        $result_group = mysqli_query($con, $sql_group);

        if ($result_group) {
            header("Location: ../../view/customer/group.php");
        } else {
            echo "Error";
        }
    } else {
        echo "Error";
    }
} else {
    echo "Error";
}
