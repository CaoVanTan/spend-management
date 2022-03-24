<?php
    session_start();
    include_once '../../config/config.php';

    if(isset($_POST['btnAddGroup'])) {
        $userId = $_SESSION['CurrentID'];
        $groupName = $_POST['groupName'];

        $sql = "INSERT INTO groups (user_id, group_name) VALUES ('$userId', '$groupName')";
        $result = mysqli_query($con, $sql);

        if($result == 1) {
            header("Location: ../../view/customer/group.php");
        } else {
            echo "Error";
        }
    } else {
        echo "Error";
    }

    mysqli_close($con);
?>
