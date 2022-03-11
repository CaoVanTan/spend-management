<?php
    include_once '../../config/config.php';

    // if(isset($_POST['group_id'])) {
    //     $groupId = $_POST['group_id'];
    //     echo $groupId;
    // }
    // if(isset($_POST['money'])) {
        // $tranMoney = $_POST['tranMoney'];
        // $tranDate = $_POST['tranDate'];
        // $tranNote = $_POST['tranNote'];
        $username = $_SESSION['CurrentUser'];
        $groupId = $_POST['group_id'];
        $tranMoney = $_POST['money'];
        $tranDate = $_POST['date'];
        $tranNote = $_POST['note'];

        $sql = "INSERT INTO spending (group_id, user_id, money, spend_day, note) VALUES ('$groupId', '$username', '$tranMoney', '$tranDate', '$tranNote')";
        $result = mysqli_query($con, $sql);

        if($result == 1) {
            header("Location: ../../view/admin/admin_student.php");
        } else {
            echo "Error";
        }
    // }


    mysqli_close($con);
?>
