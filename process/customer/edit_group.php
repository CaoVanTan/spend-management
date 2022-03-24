<?php
    session_start();
    include_once '../../config/config.php';

    if(isset($_POST['btnEditGroup'])) {
        $group_id = $_SESSION['group_id'];
        $groupName = $_POST['groupName'];

        $sql = "UPDATE groups SET group_name = '$groupName' where group_id = '$group_id'";
        $result = mysqli_query($con, $sql);

        if($result) {
            header("Location: ../../view/customer/group.php");
        } else {
            echo "Error";
        }
    } else {
        echo "Error";
    }

    mysqli_close($con);
?>
